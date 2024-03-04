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
        Schema::create('escales', function (Blueprint $table) {
            $table->id();
            $table->string('date_depart')->nullable();
            $table->string('date_arriver')->nullable();
            $table->unsignedBigInteger('vol_id');
            $table->foreign('vol_id')->references('id')->on('vols')->nullable();
            $table->unsignedBigInteger('aeroport_id');
            $table->foreign('aeroport_id')->references('id')->on('aeroports')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escales');
    }
};
