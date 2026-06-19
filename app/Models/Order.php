<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
protected $table='orders';
protected $fillable=['user_id','order_value','status'];
    const STATUS_PENDING     = 0;
    const STATUS_COMPLETE    = 1;
}