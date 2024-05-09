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
        Schema::create('encaissers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('conducteur_id')->unique();
            $table->foreign('conducteur_id')->references('id')->on('conducteurs')->onDelete('cascade');
            $table->string('typePaiement');
            $table->string('codeSecret');
            $table->string('montant');
            $table->date('dateEncaissement');
            $table->timestamps();
            
          

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encaissers');
    }
};
