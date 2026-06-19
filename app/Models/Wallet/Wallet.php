<?php

namespace App\Models\Wallet;


use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $table         = 'user_wallets';

    const ACTIVE             = 1;
    const SUSPEND            = 2;

    protected $fillable = [
        'user_id',
        'balance',
        'status',
        'account_number',
        'ifsc_code',
        'account_holder_name',
    ];


    public function transactions()
    {
        $this->belongsTo(Transaction::class, 'wallet_id', 'id');
    }
}
