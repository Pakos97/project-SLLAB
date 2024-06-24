<?php

use Carbon\Carbon;
use App\Models\Attack;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attacks', function (Blueprint $table) {
            $table->id();
            $table->string('attack');
            $table->timestamps();
        });

        $attacks = ['Attacco Rapido', 'Fulmine', 'Lanciafiamme', 'Fossa', 'Psichico', 'Iper Raggio', 'Colpo Basso', 'Tornado', 'Pugnorapido', 'Dragopulsar', 'Geloraggio', 'Fuocobomba', 'Lacerazione', 'Cozzata Zen', 'Fangobomba', 'Idropompa', 'Energipalla',];

        foreach ($attacks as $attack) {
            Attack::create([
            'attack' => $attack,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
            
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attacks');
    }
};
