<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('loan_requests')) {
            Schema::create('loan_requests', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->nullable();
                $table->string('phone');
                $table->string('state')->nullable();
                $table->string('loan_amount')->nullable();
                $table->string('loan_type')->nullable();
                $table->tinyInteger('status')->default(0)->comment('0=pending, 1=complete, 3=rejected');
                $table->text('message')->nullable();
                $table->string('lead_token')->nullable();
                $table->string('ip_address')->nullable();
                $table->string('aadhar_number')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('loan_requests');
    }
};
