<x-layout
title="show"
>
    <x-header
    title="{{$pokemon->name}}"/>
   

    <div class="container my-5 ">
        <div class="row justify-content-center border rounded shadow bg-nero text-light">
            <div class="col-8 col-md-6">
                <img src="{{Storage::url($pokemon->img)}}" class="img-fluid my-5 rounded" >
            </div>
            <div class="col-8 col-md-6 text-center my-5">
                <h5 class="my-5">Type : {{$pokemon->type}}</h5>
                <p>Attacks : 
                    @foreach ($pokemon->attacks as $attack)
                        <span>{{$attack->attack}}</span>
                    @endforeach
                </p>
                <p>Creato il: {{$pokemon->created_at}}</p>
                <p> da : {{$pokemon->user->name}}</p>
                <p class="my-5">{{$pokemon->subtitle}}</p>
                     
            </div>
            <div class="col-10 my-3 d-flex justify-content-evenly">
                <button class="btn btn-warning col-3"><a href="{{route('pokemon.edit', compact('pokemon'))}}">Modifica</button>
                    <form action="{{route('pokemon.destroy', compact('pokemon'))}}" method="POST" style="display: inline"  >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ">Elimina</button>
                    </form>
                <button class="btn btn-secondary col-3"><a href="{{route('pokemon.index')}}">Indietro</button>
            </div>
        
        </div>
        <div class="row justify-content-center text-light border rounded shadow bg-nero my-3">
            
                <h3 class="text-center col-6 border rounded my-3">Descrizione</h3>
                <p class="col-10 my-4">{{$pokemon->description}}</p>

          

           
        </div>
            
    </div>

</x-layout>