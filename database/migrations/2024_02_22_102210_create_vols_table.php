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
        Schema::create('vols', function (Blueprint $table) {
            $table->id();
            $table->string('ref')->nullable();
            $table->date('date_depart')->nullable();
            $table->date('date_arriver')->nullable();
            $table->unsignedBigInteger('compagnie_id');
            $table->foreign('compagnie_id')->references('id')->on('compagnies')->nullable();
            $table->unsignedBigInteger('depart_id');
            $table->foreign('depart_id')->references('id')->on('aeroports')->nullable();
            $table->unsignedBigInteger('arriver_id');
            $table->foreign('arriver_id')->references('id')->on('aeroports')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vols');
    }
};
