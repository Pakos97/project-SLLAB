<?php

namespace App\Livewire;

use App\Models\Attack;
use App\Models\Pokemon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreatePokemon extends Component
{
    use WithFileUploads;

    #[Validate('required', message: 'Il nome è richiesto')]
    public $name;
    #[Validate('required', message: 'Il type è richiesto')]
    public $type;
    #[Validate('required', message: 'La minidescription è richiesta')]
    public $subtitle;
    #[Validate('required', message: 'La descrizione è richiesta')]
    public $description;
  
    public $img;
    public $attackSelect =[];

    public function createPokemon(){
        
        $this->validate();
      $pokemon =  Auth::user()->Pokemons()->create([
            'name' => $this->name,
            'type' => $this->type,
            'subtitle' => $this->subtitle,
            'description' => $this->description,
            'img' => $this->img ? $this->img->store('public/cover') : '/img/gokugesu.jpg',
        ]);
       

        foreach ($this->attackSelect as $attack) {
            $pokemon->attacks()->attach($attack);
        }

        $this->reset();
        session()->flash('message', 'Pokemon created successfully');
    }

    public function render()
    
    {
        $attacks = Attack::all();
        return view('livewire.create-pokemon', compact('attacks'));

       
    }
}
