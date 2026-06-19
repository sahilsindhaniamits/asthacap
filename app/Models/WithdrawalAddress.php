<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Model;
class WithdrawalAddress extends Model
{
    protected $table    = 'withdrawal_address';
    protected $fillable = ['user_id','address_type_id','address'];

    
}