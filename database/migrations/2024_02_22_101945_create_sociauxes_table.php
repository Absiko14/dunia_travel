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
        Schema::create('sociauxes', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('lienprofil')->nullable();
            $table->String('logo')->nullable();
            $table->unsignedBigInteger('agence_id');
            $table->foreign('agence_id')->references('id')->on('agences')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sociauxes');
    }
};
