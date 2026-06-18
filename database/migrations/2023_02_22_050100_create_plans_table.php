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
        Schema::create('plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->bigInteger('price')->unsigned()->default(0);
            $table->bigInteger('daily_income')->unsigned()->default(0);
            $table->bigInteger('total_income')->unsigned()->default(0);
            $table->integer('complete_cycle')->unsigned()->default(0);
            $table->integer('status')->unsigned()->default(0);
            $table->bigInteger('created_by')->unsigned();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
