<x-layout
title="register">
    <x-header
    title="Crea Account"
    />
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-md-8 border rounded shadow bg-nero">
                
                <form class="m-4 text-light" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form3Example1" class="form-control" name="name" />
                                <label class="form-label text-light" for="form3Example1"> Nome</label>
                            </div>
                        </div>
                     
                    </div>
                    
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" id="form3Example3" class="form-control" name="email" />
                        <label class="form-label text-light" for="form3Example3">Email</label>
                    </div>
                    
                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="form3Example4" class="form-control" name="password" />
                        <label class="form-label text-light" for="form3Example4">Password</label>
                    </div>
                    
                    
                    <!--confirm Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="form3Example4" class="form-control" name="password_confirmation"/>
                        <label class="form-label text-light" for="form3Example4">Conferma Password</label>
                    </div>

                    <div class="mt-4 mb-4">
                        <label for="profile_photo">Profile Photo</label>
                        <input id="profile_photo" type="file" class="form-control @error('profile_photo') is-invalid @enderror" name="profile_photo" value="{{ old('profile_photo') }}">
                
                        @error('profile_photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                
                   


                    
                    
                    
                    
                    <!-- Submit button -->
                    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Registrati</button>
                    
                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Sei già registrato? <a href="{{ route('login') }}">Accedi</a></p>
                    </button>
                </div>
            </form> 
        </div>
        
    </div>
</div>




</x-layout>