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
        Schema::create('classevols', function (Blueprint $table) {
            $table->id();
            $table->string('nbre_place')->nullable();
            $table->string('disponiblite')->nullable();
            $table->unsignedBigInteger('classe_id');
            $table->foreign('classe_id')->references('id')->on('classes')->nullable();
            $table->unsignedBigInteger('vol_id');
            $table->foreign('vol_id')->references('id')->on('vols')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classevols');
    }
};
