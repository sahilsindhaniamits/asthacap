<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCommision extends Model
{
protected $table='user_commision';
protected $fillable=['user_id','orders'];
    
}