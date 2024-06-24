<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\ProfileController;

Route::get('/',[PublicController::class, 'home'])->name('home');
Route::post('submit', [PublicController::class, 'submit'])->name('newsletter.submit');


Route::middleware(['auth'])->group(function () {
    Route::get('/pokemon/create', [PokemonController::class, 'create'])->name('pokemon.create');
    Route::get('/pokemon/index', [PokemonController::class, 'index'])->name('pokemon.index');
    Route::get('/pokemon/show/{pokemon}', [PokemonController::class, 'show'])->name('pokemon.show');
    Route::get('/pokemon/edit/{pokemon}', [PokemonController::class, 'edit'])->name('pokemon.edit');
    Route::delete('/pokemon/destroy/{pokemon}', [PokemonController::class, 'destroy'])->name('pokemon.destroy');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/profile', [ProfileController::class, 'profile'])->name('profile.profile');


    
});

