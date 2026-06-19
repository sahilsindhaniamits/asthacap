<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TransactionRequest;
use App\Models\User;
use App\Models\Wallet\Transaction;
use App\Models\Wallet\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class TransactionController extends Controller
{
    public function depositRequests()
    {
        $transactions = TransactionRequest::with('detail', 'wallet', 'user')->where('type', TransactionRequest::TYPE_DEPOSIT);

        if (request()->status == 'rejected')      $transactions->where('status', TransactionRequest::STATUS_REJECTED);
        else if (request()->status == 'accepted') $transactions->where('status', TransactionRequest::STATUS_ACCEPTED);
        else $transactions->where('status', TransactionRequest::STATUS_NEW);
        $transactions =  $transactions->get();

        return view('admin.transaction.deposit', compact('transactions'));
    }

    public function depositAccept(Request $request, $transaction_id)
    {
        $transactionRequest = TransactionRequest::with('detail', 'wallet', 'user')
            ->where('type', TransactionRequest::TYPE_DEPOSIT)
            ->where('id', $transaction_id)
            ->where('status', TransactionRequest::STATUS_NEW)
            ->first();

        if (empty($transactionRequest)) return Response::json(array(
            'status'  => false,
            'message' => 'Invalid transaction or its already accepted by another admin',
        ));

        if (empty($transactionRequest->detail) || empty($transactionRequest->user) || empty($transactionRequest->wallet)) return Response::json(array(
            'status'  => false,
            'message' => 'Something went wrong, please contact with developer',
        ));

        // echo 'hehe';


        // try {
            self::accpetDeposit($transactionRequest);
        // } catch (\Throwable $th) {
        //     return Response::json(array(
        //         'status'  => false,
        //         'message' => 'Something went wrong, please contact with developer',
        //     ));
        // }

        return Response::json(array(
            'status'  => true,
            'message' => 'Recharge moved to completed',
        ));
    }

    public static function accpetDeposit(&$transactionRequest)
    {
        $amount                                  = request()->amount ? request()->amount : $transactionRequest->detail->amount;
        $transactionRequest->status = TransactionRequest::STATUS_ACCEPTED;
        // $transactionRequest->status = TransactionRequest::STATUS_NEW;
        $transactionRequest->save();
        $transactionRequest->detail->amount      = $amount;
        $transactionRequest->detail->status      = Transaction::STATUS_COMPLETE;
        // $transactionRequest->detail->status      = Transaction::STATUS_PENDING;
        $transactionRequest->detail->approved_by = Auth::user()->id;
        $transactionRequest->detail->save();
        $transactionRequest->wallet->balance     = $transactionRequest->wallet->balance + $amount;
        $transactionRequest->wallet->save();

        self::shareBonus($transactionRequest->user, $amount);
    }

    public function depositReject(Request $request, $transaction_id)
    {
        $transactionRequest = TransactionRequest::with('detail', 'wallet', 'user')
            ->where('type', TransactionRequest::TYPE_DEPOSIT)
            ->where('id', $transaction_id)
            ->where('status', TransactionRequest::STATUS_NEW)
            ->first();

        if (empty($transactionRequest)) return Response::json(array(
            'status'  => false,
            'message' => 'Invalid transaction or its already deleted by another admin',
        ));

        if (empty($transactionRequest->detail) || empty($transactionRequest->user) || empty($transactionRequest->wallet)) return Response::json(array(
            'status'  => false,
            'message' => 'Something went wrong, please contact with developer',
        ));

        try {
            $transactionRequest->status              = TransactionRequest::STATUS_REJECTED;
            $transactionRequest->save();
            $transactionRequest->detail->status      = Transaction::STATUS_REJECTED;
            $transactionRequest->detail->approved_by = Auth::user()->id;
            $transactionRequest->detail->save();
        } catch (\Throwable $th) {
            return Response::json(array(
                'status'  => false,
                'message' => 'Something went wrong, please contact with developer',
            ));
        }

        return Response::json(array(
            'status'  => true,
            'message' => 'Recharge moved to rejected',
        ));
    }


    //// withdrawl request here //////////////

    public function withdrawlRequests()
    {
        $transactions = TransactionRequest::with('detail', 'wallet', 'user')->where('type', TransactionRequest::TYPE_WITHDRAW);

        if (request()->status == 'rejected')      $transactions->where('status', TransactionRequest::STATUS_REJECTED);
        else if (request()->status == 'accepted') $transactions->where('status', TransactionRequest::STATUS_ACCEPTED);
        else $transactions->where('status', TransactionRequest::STATUS_NEW);
        $transactions =  $transactions->get();

        return view('admin.transaction.withdrawl', compact('transactions'));
    }


    public function withdrawlAccept(Request $request, $transaction_id)
    {
        $transactionRequest = TransactionRequest::with('detail', 'wallet', 'user')
            ->where('type', TransactionRequest::TYPE_WITHDRAW)
            ->where('id', $transaction_id)
            ->where('status', TransactionRequest::STATUS_NEW)
            ->first();

        if (empty($transactionRequest)) return Response::json(array(
            'status'  => false,
            'message' => 'Invalid transaction or its already accepted by another admin',
        ));

        if (empty($transactionRequest->detail) || empty($transactionRequest->user) || empty($transactionRequest->wallet)) return Response::json(array(
            'status'  => false,
            'message' => 'Something went wrong, please contact with developer',
        ));

        $amount                                  = request()->amount ? request()->amount : $transactionRequest->detail->amount;
        if ($transactionRequest->wallet->balance < $amount) return Response::json(array(
            'status' => false,
            'message' => "User don't have enough balance to withdraw this amount",
        ));

        try {
            self::accpetWithdrawl($transactionRequest);
        } catch (\Throwable $th) {
            return Response::json(array(
                'status'  => false,
                'message' => 'Something went wrong, please contact with developer',
            ));
        }

        return Response::json(array(
            'status'  => true,
            'message' => 'Withdrawl request moved to completed',
        ));
    }

    public static function accpetWithdrawl(&$transactionRequest)
    {
        $amount                                  = request()->amount ? request()->amount : $transactionRequest->detail->amount;
        if (($transactionRequest->wallet->balance - $amount) < 0) return;

        $transactionRequest->status = TransactionRequest::STATUS_ACCEPTED;
        // $transactionRequest->status = TransactionRequest::STATUS_NEW;
        $transactionRequest->save();
        $transactionRequest->detail->amount      = $amount;
        $transactionRequest->detail->status      = Transaction::STATUS_COMPLETE;
        // $transactionRequest->detail->status      = Transaction::STATUS_PENDING;
        $transactionRequest->detail->approved_by = Auth::user()->id;
        $transactionRequest->detail->save();
        $transactionRequest->wallet->balance     = $transactionRequest->wallet->balance - $amount;
        $transactionRequest->wallet->save();
    }


    public function withdrawlReject(Request $request, $transaction_id)
    {
        $transactionRequest = TransactionRequest::with('detail', 'wallet', 'user')
            ->where('type', TransactionRequest::TYPE_WITHDRAW)
            ->where('id', $transaction_id)
            ->where('status', TransactionRequest::STATUS_NEW)
            ->first();

        if (empty($transactionRequest)) return Response::json(array(
            'status'  => false,
            'message' => 'Invalid transaction or its already deleted by another admin',
        ));

        if (empty($transactionRequest->detail) || empty($transactionRequest->user) || empty($transactionRequest->wallet)) return Response::json(array(
            'status'  => false,
            'message' => 'Something went wrong, please contact with developer',
        ));

        try {
            $transactionRequest->status              = TransactionRequest::STATUS_REJECTED;
            $transactionRequest->save();
            $transactionRequest->detail->status      = Transaction::STATUS_REJECTED;
            $transactionRequest->detail->approved_by = Auth::user()->id;
            $transactionRequest->detail->save();
        } catch (\Throwable $th) {
            return Response::json(array(
                'status'  => false,
                'message' => 'Something went wrong, please contact with developer',
            ));
        }

        return Response::json(array(
            'status'  => true,
            'message' => 'Withdrawl moved to rejected',
        ));
    }




    /////////// send bonus //////////////
    public static function shareBonus($user, $amount){
        $amount     = (int) $amount;
        $bonusLevel = Array(
            1 => $amount  / 100  * 25,
            2 => $amount  / 100  * 10,
            3 => $amount  / 100  * 5,
        );

        $network                     = [];
        self::getNetwork($network, $user->id);
        $transactions                = [];
        foreach ($network as $level  => $networkUsers) {
            $users                   = [];
            $transactionAmount       = $bonusLevel[$level] ?? 0;

            foreach ($networkUsers as $user) {
                if (empty($user)) continue;
                $wallet              = Wallet::where('user_id', $user)->first();
                if (empty($wallet))  continue;
                $wallet->balance     = (int) $wallet->balance + (int) $transactionAmount;
                $wallet->save();

                $users[]             = array(
                    'wallet_id'      => $wallet->id,
                    'user_id'        => $user,
                    'amount'         => $transactionAmount,
                    'type'           => Transaction::REFFER_RECHARGE_BONUS,
                    'status'         => Transaction::STATUS_COMPLETE,
                );
            }
            $transactions = [...$transactions, ...$users];
        }

        if (!empty($transactions)) Transaction::insert($transactions);       
    }

    public static function getNetwork(&$network, $ids, $maxLevel = 3, $currentLevel = 1){
        if ($currentLevel > $maxLevel) return;
        if (empty($ids))               return;
        $ids                    = User::whereIn('id', is_array($ids) ? $ids : [$ids])->pluck('referred_by')->toArray();
        $ids                    = array_filter($ids);
        $network[$currentLevel] = $ids;
        self::getNetwork($network, $ids, $maxLevel, $currentLevel+1);        
    }
}
