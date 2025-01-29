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
        Schema::create('rains', function (Blueprint $table) {
            $table->id();
            $table->integer('duration');
            $table->unsignedBigInteger('city_id');
            $table->integer('rainfall_amount');
            $table->boolean('risk_zone');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rains');
    }
};
