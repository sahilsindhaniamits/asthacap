<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\UserPlan;
use App\Models\Wallet\Transaction;
use App\Models\Wallet\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class PlanController extends Controller
{
    public function buy(Request $request, $plan_id)
    {
        $plan = Plan::where('plan_id', $plan_id)->first();

        if (empty($plan)) return Response::json(array(
            'status'  => false,
            'error'   => true,
            'message' => 'Invalid plan',
        ));

        if (!empty($plan->is_locked)) return Response::json(array(
            'status'  => false,
            'message' => 'This plan is locked, please contact to admin to buy this',
        ));
        
        $wallet = Auth::user()->wallet();

        if ($wallet->balance < $plan->price) return Response::json(array(
            'status'  => false,
            'message' => 'You have insufficient balance to purchase this plan',
        ));

        $purchasedPlans = UserPlan::where('plan_id', $plan->id)->where('user_id', Auth::user()->id)->count();

        if ($purchasedPlans >= $plan->max_slot_for_one_user) return Response::json(array(
            'status'  => false,
            'message' => 'You can only purchase this plan for ' . $plan->max_slot_for_one_user . ' times',
        ));     
        
        $purchasedPlans = UserPlan::where('plan_id', $plan->id)->count();
        if ($purchasedPlans >= $plan->max_slots) return Response::json(array(
            'status'  => false,
            'message' => 'All slots booked for this plan',
        ));  

        $transaction = Transaction::create(array(
            'wallet_id'      => $wallet->id,
            'user_id'        => Auth::user()->id,
            'amount'         => $plan->price,
            'type'           => Transaction::WITHDRAWL_PAYMENT,
            'status'         => Transaction::STATUS_PENDING,
        ));

        if (empty($transaction) && (($wallet->balance - $plan->price) < 0)) return Response::json(array(
            'status'  => false,
            'error'   => true,
            'message' => 'Something went wrong, please try again later',
        ));

        if (empty(UserPlan::create(array(
            'user_id'        => Auth::user()->id,
            'transaction_id' => $transaction->id,
            'status'         => UserPlan::PLAN_ACTIVE,
            'plan_id'        => $plan->id,
            'amount_received'=> 0,
            'amount_pending' => $plan->total_income,
        )))) return Response::json(array(
            'status'  => false,
            'error'   => true,
            'message' => 'Something went wrong, please try again later',
        ));

        $wallet->balance     = $wallet->balance - $plan->price;
        $wallet->save();

        $transaction->status  = Transaction::STATUS_COMPLETE;
        $transaction->plan_id = $plan->id;
        $transaction->plan_id = "Purchased plan " . $plan->plan_id;
        $transaction->save();

        return Response::json(array(
            'status'  => true,
            'message' => 'Plan purchased successfully',
        ));
    }
}
