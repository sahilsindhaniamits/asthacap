<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\TransactionRequest;
use App\Models\Wallet\Transaction;
use App\Models\Setting;
use App\Models\WithdrawalAddress;
use App\Models\AddressType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use DB;
class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::where('user_id', Auth::user()->id)->whereIn('type', [Transaction::DEPOSIT_PAYMENT, Transaction::WITHDRAWL_PAYMENT])->orderBy('created_at', 'desc')->get()->groupBy('type');

        // dd( $transactions->toArray());
        $recharges   = $transactions[Transaction::DEPOSIT_PAYMENT] ?? [];
        $withdrawl = $transactions[Transaction::WITHDRAWL_PAYMENT] ?? [];

        $wallet = Auth::user()->wallet();

        return view('user.wallet.index', compact('recharges', 'wallet', 'withdrawl'));
    }

      
       
       
    public function addMoney()
    {
        $address=Setting::orderby('created_at','desc')->first('binance_address');
        $binance=$address['binance_address'];
        return view('user.wallet.add_money',compact('binance'));
    }

    public function addMoneySubmit(Request $request)
    {
        $amount=$request->input('amount');
        $transaction_id=$request->input('transaction_id');
      
       
        if(Transaction::where('transaction_id',$transaction_id)->get()->count()>1)
        {
            $popupmessage='Transaction id exists';
            return view('user.wallet.add_money',compact('popupmessage'));
        }
        
       if( Transaction::where('user_id',Auth::user()->id)
        ->where('type', Transaction::DEPOSIT_PAYMENT)
        ->where('status', Transaction::STATUS_COMPLETE)->count()==1)
        {
            
            if(intval($request->input('amount'))>intval(0) && intval($request->input('amount'))<intval(99)){
            $welcome_bonus=intval(2);
            }
            if(intval($request->input('amount'))<intval(100) && intval($request->input('amount'))<intval(598))
            $welcome_bonus=intval(7);
            if($request->input('amount')>intval(599) && $request->input('amount')<intval(1998))
            $welcome_bonus=intval(9);
            if($request->input('amount')>intval(599) && $request->input('amount')<intval(1998))
            $welcome_bonus=intval(9);
             if($request->input('amount')>intval(1999) && $request->input('amount')<intval(4998))
            $welcome_bonus=intval(11);
             if($request->input('amount')>intval(4998) && $request->input('amount')<intval(29998))
            $welcome_bonus=intval(15);
             if($request->input('amount')>29999 && $request->input('amount')<79998)
            $welcome_bonus=intval(29);
             if($request->input('amount')>79999 && $request->input('amount')<100000)
            $welcome_bonus=intval(50);
           
           $wallet = Auth::user()->wallet();
           $transaction = Transaction::create(array(
            'wallet_id'      => $wallet->id,
            'user_id'        => Auth::user()->id,
            'amount'         => intval($amount)+$welcome_bonus ,
            'type'           => Transaction::DEPOSIT_PAYMENT,
            'status'         => Transaction::STATUS_PENDING,
            'transaction_id' => $request->transaction_id,
            'image'          =>$request->image
        ));

        TransactionRequest::create(array(
            'user_id'        => Auth::user()->id,
            'transaction_id' => $transaction->id,
            'type'           => TransactionRequest::TYPE_DEPOSIT,
        ));
        

        // $wallet = Auth::user()->wallet();
        // if (!empty($wallet)) {
        //     $wallet->balance = $wallet->balance + $amount;
        //     $wallet->save();
        // }

        return redirect()->route('home')->with('success', 'Transaction successful, balance will be reflected in your account within 24 hours and a welcome bonus');
        }
        else{
             $wallet = Auth::user()->wallet();
             $transaction = Transaction::create(array(
            'wallet_id'      => $wallet->id,
            'user_id'        => Auth::user()->id,
            'amount'         => $amount,
            'type'           => Transaction::DEPOSIT_PAYMENT,
            'status'         => Transaction::STATUS_PENDING,
            'transaction_id' => $request->transaction_id,
            'image'          =>$request->image
        ));

        TransactionRequest::create(array(
            'user_id'        => Auth::user()->id,
            'transaction_id' => $transaction->id,
            'type'           => TransactionRequest::TYPE_DEPOSIT,
        ));
        }
      
        // dd($amount);
        // $token       = Session::pull('token');
        // $addedAmount = Session::pull('amount');
        // try {
        //     $amount = decrypt($token);
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error', 'Something went wrong');
        // }

        // if ((int)$amount !== (int)$addedAmount) return redirect()->back()->with('error', 'Something went wrong');
        // if ((int)$amount !== (int)$addedAmount) return redirect()->back()->with('error', 'Something went wrong');


        // $wallet = Auth::user()->wallet();
        // if (!empty($wallet)) {
        //     $wallet->balance = $wallet->balance + $amount;
        //     $wallet->save();
        // }

        return redirect()->route('home')->with('success', 'Transaction successful, balance will be reflected in your account within 24 hours');
    }

    public function withdraw_page()
    {
        $user_address_type= WithdrawalAddress::leftjoin('Address_type','withdrawal_address.address_type_id','=','Address_type.id')
                                               ->where('withdrawal_address.user_id',Auth::user()->id)
                                               ->select('withdrawal_address.address','Address_type.type')
                                               ->get()->ToArray();
                                               
       if(empty($user_address_type))
       {
       
       return response()->json(['redirect'=>true],200);
      
       }
        exit();
       $user_balance=DB::table('user_wallets')->where('user_id',Auth::user()->id)->first('balance');
       $balance=$user_balance->balance ?? '';
       $user_address=[];
        foreach($user_address_type as $index=>$value)
        $user_address[]=$user_address_type[$index]['type'].':'.$user_address_type[$index]['address'];
        return view('user.wallet.withdraw_money',compact('user_address','balance'));
    }

    public function withdrawSubmit(Request $request)
    {
        $amount  = filter_var($request->amount, FILTER_SANITIZE_NUMBER_INT);
        $address_type=$request->input('user-address');
       
        
        if (empty($amount)) return Response::json(array(
            'status' => false,
            'message' => 'Invalid amount',
        ));

        $wallet = Auth::user()->wallet();

        if ($amount < 25) return Response::json(array(
            'status' => false,
            'message' => "Minimum withdrawal amount is 25$",
        ));

        if ($wallet->balance < $amount) return Response::json(array(
            'status' => false,
            'message' => "You don't have enough balance to withdraw this amount",
        ));

        $transactionRequest = TransactionRequest::where('user_id', Auth::user()->id)
            ->where('type', Transaction::WITHDRAWL_PAYMENT)
            ->whereDay('created_at', now()->day)->count();

        if (!empty($transactionRequest)) return Response::json(array(
            'status' => false,
            'message' => "You can only withdraw once in 24Hours",
        ));

        $transaction = Transaction::create(array(
            'wallet_id'      => $wallet->id,
            'user_id'        => Auth::user()->id,
            'amount'         => $amount,
            'type'           => Transaction::WITHDRAWL_PAYMENT,
            'status'         => Transaction::STATUS_PENDING,
            'transaction_id' => $request->transaction_id,
            'address_type'   =>  $address_type
        ));

        TransactionRequest::create(array(
            'user_id'        => Auth::user()->id,
            'transaction_id' => $transaction->id,
            'type'           => TransactionRequest::TYPE_WITHDRAW,
        ));

        return redirect()->route('home')->with('success', 'Transaction successful, balance will be reflected in your account within 24 hours');
    }
    public function getTransactionToken(Request $request)
    {
        Session::put('amount', $request->amount);
        Session::put('token', encrypt($request->amount));

        return redirect()->back();
        // return Response::json(array(
        //     'token' => 
        // ))
    }
}
