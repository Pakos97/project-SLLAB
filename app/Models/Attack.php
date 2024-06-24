<?php

namespace App\Models;

use App\Models\Pokemon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attack extends Model
{
    use HasFactory;

    protected $fillable = ['attack'];
    public function pokemons()
    {
        
        return $this->belongsToMany(Pokemon::class);
    }
}
