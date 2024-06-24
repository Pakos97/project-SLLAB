<div class="col-8 border rounded shadow m-5 bg-nero">
    @if (session('message'))
    <div class="alert alert-success mt-3">
        {{ session('message') }}
    </div>
    
@endif
    <form enctype="multipart/form-data" class="m-5" wire:submit.prevent='createPokemon'>
      

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
            <textarea  class="form-control" wire:model.blur='description' type="text" ></textarea>
          
            @error('description') <div class="text-danger">{{ $message }}</div> @enderror
       
          </div>
          <div class="mb-3">
            <label  class="form-label">Attacks</label>
        <select multiple  type="checkbox" class="form-control" wire:model.blur='attackSelect'id="">
            @foreach ($attacks as $attack)
              <option value="{{ $attack->id }}">{{ $attack->attack }}</option>
                  
              @endforeach

        </select>
             
           
          
      
       
          </div>


          <div class="mb-3">
            <label  class="form-label">Image</label>
            <input type="file" class="form-control" wire:model.blur='img'>
       
          </div>

          
          <button type="submit" class="btn btn-primary">Aggiungi</button>





      </form>

  

</div>
