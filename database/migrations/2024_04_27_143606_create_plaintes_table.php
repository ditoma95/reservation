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
        Schema::create('plaintes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('reclamation_id')->unique();
            $table->foreign('reclamation_id')->references('id')->on('reclamations')->onDelete('cascade');
            $table->string('motif');
            $table->string('description');
            $table->date('datePlainte');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plaintes');
    }
};
