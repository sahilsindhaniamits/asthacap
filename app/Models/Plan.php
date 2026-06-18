<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table    = 'plans';

    const ACTIVE = 1;
    
    protected $fillable = [
        'name',
        'description',
        'price',
        // 'daily_income',
        // 'total_income',
        // 'complete_cycle',
        'status',
        // 'created_by',
        // 'plan_id',
        // 'max_slot_for_one_user',
        // 'max_slots',
        'image',
        'short_description'
        // 'is_locked'
    ];

    // public function users()
    // {
    //     return User::firstOrCreate(['user_id' => $this->id]);
    // }
}
