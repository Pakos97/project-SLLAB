
<div class="col-8 border rounded shadow m-5 bg-nero">
    @if (session('message'))
    <div class="alert alert-success mt-3">
        {{ session('message') }}
    </div>
    
    @endif
    <form enctype="multipart/form-data" class="m-5" wire:submit.prevent='editPokemon'>
        
        
        <div class="mb-3">
            <label  class="form-label">Nome Pokemon</label>
            <input type="text" class="form-control" wire:model.blur='name'>
            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
            
        </div>
        <div class="mb-3">
            <label  class="form-label">type</label>
            <input type="text" class="form-control" wire:model.blur='type'>
            @error('type') <div class="text-danger">{{ $message }}</div> @enderror
            
        </div>
        <div class="mb-3">
            <label  class="form-label">Mini descrizione</label>
            <input type="text" class="form-control" wire:model.blur='subtitle'>
            @error('subtitle') <div class="text-danger">{{ $message }}</div> @enderror
            
        </div>
        <div class="mb-3">
            <label  class="form-label">Descrizione</label>
            <input type="text" class="form-control" wire:model.blur='description'>
            @error('description') <div class="text-danger">{{ $message }}</div> @enderror
            
        </div>
        
        <div class="mb-3">
            <label  class="form-label" for="attack_tag">Attacks</label><br>
                @foreach ($attacks as $attack)
                <input @if($attackSelect->contains($attack->id)) @endif type="checkbox" wire:model='attackSelect' value="{{$attack->id}}" id="{{$attack->id}}">
                <label for="{{$attack->id}}"> {{$attack->attack}}</label><br>
                @endforeach   
        </div>
        
        <div class="row">
            <div class="mb-3 col-3">
                <label  class="form-label"></label>
                <img class="imgedit rounded" src="{{Storage::url($this->img)}}" alt="">
            </div>
            
            <div class="mb-3 col-9">
                <label  class="form-label">New Image</label>
                <input type="file" class="form-control" wire:model.blur='newimg'>          
            </div>
            
        </div>
        
        
        
        <button type="submit" class="btn btn-primary col-12">Aggiungi</button>
        
        
        
        
        
    </form>
    
    
    
</div>


