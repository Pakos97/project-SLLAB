<x-layout
title="index"
>
<x-header
title="Pokèdex"
/>

<div class="container-fluid mt-4">
    <div class="row justify-content-center ">
        <div class="d-grid col-10 mb-5">
            <button class="btn btn-secondary" type="button"> <a class="dropdown-item" href="{{route('pokemon.create')}}">Aggiungi Pokemon</a></button>
            
          </div>
        
       
        @foreach ($pokemons as $pokemon)
         <div class="col-12 col-md-4 mb-3">
            <x-card 
            :pokemon="$pokemon"/>
            
           </div> 
        
        @endforeach
         
        
    </div>
</div>
</x-layout>