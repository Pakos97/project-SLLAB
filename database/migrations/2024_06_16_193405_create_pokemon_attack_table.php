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
        Schema::create('attack_pokemon', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pokemon_id');
            $table->foreign('pokemon_id')->references('id')->on('pokemon');
            $table->unsignedBigInteger('attack_id');
            $table->foreign('attack_id')->references('id')->on('attacks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attack_pokemon');
    }
};
