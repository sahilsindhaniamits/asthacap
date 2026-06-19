<?php

namespace App\Service;

use App\Models\UserPlan;
use App\Models\Wallet\Transaction;
use App\Models\Wallet\Wallet;

class TransactionService
{
    /**
     * Register any application services.
     */
    public static function sendMoney()
    {
        $plans = UserPlan::with('plan')->where('status', UserPlan::PLAN_ACTIVE)->get();
        
        foreach ($plans as $plan) {
            try {static::createTransaction($plan);} catch (\Throwable $th) {}
        }
    }

    public static function createTransaction(&$plan)
    {
        $planAmount      = $plan->plan->daily_income   ?? 0;
        $completeCycle   = $plan->plan->complete_cycle ?? 0;
        $planID          = $plan->plan->plan_id        ?? '-';


        $plan->cycle_completed = $plan->cycle_completed + 1;
        if ($plan->cycle_completed >= $completeCycle)
            $plan->status = UserPlan::PLAN_COMPLETE;

        $plan->save();

        $wallet          =  Wallet::where('user_id', $plan->user_id)->first();
        $wallet->balance = $wallet->balance + $planAmount;
        $wallet->save();

        Transaction::create(array(
            'wallet_id' => $wallet->id,
            'user_id'   => $wallet->user_id,
            'amount'    => $planAmount,
            'type'      => Transaction::DAILY_BONUS,
            'status'    => Transaction::STATUS_COMPLETE,
            'description' => 'Daily income received via plan ' . $planID,
        ));
    }
}
