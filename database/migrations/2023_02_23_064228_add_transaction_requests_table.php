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
        Schema::create('transaction_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('transaction_id')->default(0);
            $table->bigInteger('user_id')->default(0);
            $table->bigInteger('action_by')->default(0);
            $table->integer('type')->unsigned()->default(0);
            $table->integer('status')->unsigned()->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_requests');
    }
};
