<?php

namespace App\Livewire;

use App\Models\Attack;
use App\Models\Pokemon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class EditPokemon extends Component
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
    public $newimg;
    public $idPokemon;
    public $attackSelect =[];

    public $attacks;

    public function editPokemon(){
        
        $this->validate();

        $pokemon = Pokemon::find($this->idPokemon);

        $pokemon->update([
            'name' => $this->name,
            'type' => $this->type,
            'subtitle' => $this->subtitle,
            'description' => $this->description,
            'img' => $this->newimg ? $this->img->store('public/cover') : $this->img,
        ]);

        $pokemon->attacks()->sync($this->attackSelect);
     
        $this->resetCampi();
        
        session()->flash('message', 'Pokemon modificato con successo');
    }

    public function resetCampi(){
        
        $this->reset(['name', 'type', 'subtitle', 'description', 'img', 'newimg',  ]);
        $pokemon = Pokemon::find($this->idPokemon);
        $this->attackSelect = $pokemon->attacks->pluck('id');
        $this->attacks = Attack::all();
    }
    public function mount($idPokemon){
        $pokemon = Pokemon::find($idPokemon);
        $this->idPokemon = $idPokemon;
        $this->name = $pokemon->name;
        $this->type = $pokemon->type;
        $this->subtitle = $pokemon->subtitle;
        $this->description = $pokemon->description;
        $this->img = $pokemon->img;
        $this->idPokemon = $idPokemon;

        $this->attackSelect = $pokemon->attacks->pluck('id');

        $this->attacks = Attack::all();
    }
    public function render()
    {
        
        return view('livewire.edit-pokemon');
    }
}
