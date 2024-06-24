<x-layout
title="edit">
    <x-header
    title=" Modifica il tuo Pokemon "
    />
    <div class="container my-3">

        <div class="row justify-content-center">
       
                <livewire:edit-pokemon
                idPokemon="{{$pokemon->id}}"/>
           
        </div>
        
    </div>
</div>




</x-layout>