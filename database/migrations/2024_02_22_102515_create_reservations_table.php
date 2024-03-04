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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('ref')->nullable();
            $table->string('nbre_personne')->nullable();
            $table->float('Montant')->nullable();
            $table->date('date_depart')->nullable();
            $table->date('date_arriver')->nullable();
            $table->unsignedBigInteger('classe_id');
            $table->foreign('classe_id')->references('id')->on('classes')->nullable();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients')->nullable();
            $table->unsignedBigInteger('vol_id');
            $table->foreign('vol_id')->references('id')->on('vols')->nullable();
            $table->unsignedBigInteger('passager_id');
            $table->foreign('passager_id')->references('id')->on('passagers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
