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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('email')->nullable();
            $table->string('adresse')->nullable();
            $table->string('telephone')->nullable();
            $table->date('date_entrer')->nullable();
            $table->date('date_sortie')->nullable();
            $table->time('heure')->nullable();
            $table->string('document')->nullable();
            $table->float('tarif')->nullable();
            $table->string('ville_des')->nullable();
            $table->string('activite')->nullable();
            $table->string('interet')->nullable();
            $table->unsignedBigInteger('paiement_id');
            $table->foreign('paiement_id')->references('id')->on('paiements')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
