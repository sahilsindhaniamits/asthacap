<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPlan extends Model
{

    protected $table    = 'user_plans';

    const PLAN_INACTIVE    = 0; 
    const PLAN_ACTIVE      = 1; 
    const PLAN_COMPLETE    = 2; 
    const PLAN_SUSPENDED   = 3; 

    protected $fillable = [
        'plan_id',
        'user_id',
        'transaction_id',
        'status',
        'amount_received',
        'amount_pending',
        'cycle_completed'
    ];

    public function plan(){
        return $this->belongsTo(Plan::class, 'plan_id', 'id');
    }
}
