<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wallet_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('wallet_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('amount')->unsigned()->default(0);
            $table->integer('type')->unsigned()->default(0);
            $table->integer('status')->unsigned()->default(0);
            $table->bigInteger('approved_by')->unsigned()->default(0);
            $table->string('transaction_id', 30)->default('Invalid Transaction Id');
            $table->softDeletes();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallet_transactions');
    }
};
