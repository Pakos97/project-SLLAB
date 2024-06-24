<?php

namespace App\Models;

use App\Models\User;

use App\Models\Attack;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pokemon extends Model
{
   
    use HasFactory; 
    
    protected $fillable = [
        'name',
        'type',
        'subtitle',
        'img',
        'description',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function attacks()
    {
        return $this->belongsToMany(Attack::class);
    }
}
