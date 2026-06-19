<?php

namespace App\Models;

use App\Models\Wallet\Transaction;
use App\Models\Wallet\Wallet;
use Illuminate\Database\Eloquent\Model;

class TransactionRequest extends Model
{
    protected $table    = 'transaction_requests';

    const TYPE_WITHDRAW    = 1; 
    const TYPE_DEPOSIT     = 2; 

    const STATUS_REJECTED  = 2; 
    const STATUS_NEW       = 0; 
    const STATUS_ACCEPTED  = 1;

    protected $fillable = [
        'transaction_id',
        'user_id',
        'action_by',
        'type',
        'status',
    ]; 

    public function detail(){
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function wallet(){
        return $this->belongsTo(Wallet::class, 'user_id', 'user_id');
    }
}
