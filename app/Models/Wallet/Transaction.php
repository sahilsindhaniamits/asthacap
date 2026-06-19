<?php

namespace App\Models\Wallet;


use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table         = 'wallet_transactions';

    const WITHDRAWL_PAYMENT  = 1;
    const DEPOSIT_PAYMENT    = 2;
    const INVALID_PAYMENT    = 0;

    const REFFER_RECHARGE_BONUS = 5;
    const DAILY_BONUS        = 6;
    // const REFFER_RECHARGE_BONUS = 0;

    const STATUS_PENDING     = 0;
    const STATUS_COMPLETE    = 1;
    const STATUS_FAILED      = 2;
    const STATUS_REJECTED    = 3;

    protected $fillable = [
        'wallet_id',
        'user_id',
        'amount',
        'type',
        'status',
        'approved_by',
        'transaction_id',
        'description',
        'plan_id',
        'address_type'
    ];
}
