<div class="card ">
    <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
      <img src="{{Storage::url($pokemon->img)}}" class="img-fluid"/>
      <a href="{{route('pokemon.show', compact('pokemon'))}}">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
      </a>
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$pokemon->name}}</h5>
      <p class="card-text">type : {{$pokemon->type}}</p>
      <p class="card-text">{{$pokemon->subtitle}}</p>
      <p class="card-text small">Creato da : {{$pokemon->user->name}}</p>
      <button class="btn btn-secondary">
        <a href="{{route('pokemon.show', compact('pokemon'))}}">Dettagli</a>

          
        </button>
      
    </div>
  </div>