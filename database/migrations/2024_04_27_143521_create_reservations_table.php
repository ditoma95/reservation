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
            $table->increments('id');
            $table->string('dateDepart');
            $table->string('lieuDepart');
            $table->string('lieuArrive');
            $table->string('heurDepart');
            $table->string('nombrePlace');
            $table->unsignedInteger('trajet_id');
            $table->foreign('trajet_id')->references('id')->on('trajets')->onDelete('cascade');
            $table->unsignedInteger('passager_id');
            $table->foreign('passager_id')->references('id')->on('passagers')->onDelete('cascade');
            
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
