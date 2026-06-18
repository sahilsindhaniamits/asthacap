<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Model;
class AddressType extends Model
{
    protected $table    = 'Address_type';

    const ACTIVE = 1;
    
    protected $fillable = ['type'];

    
}