<x-layout
title="Login">
    <x-header
    title="Accedi"/>
    <div class="container my-5 ">
        <div class="row justify-content-center">
            <div class="col-md-8 border rounded shadow bg-nero">
                
                <form class="m-4" method="POST" action="{{ route('login') }}" >
                    @csrf

               
                    
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
                
                   


                    
                    
                    
                    
                    <!-- Submit button -->
                    <button data-mdb-ripple-init type="submit " class="btn btn-primary btn-block mb-4">Accedi</button>
                    
                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Non hai un account? <a href="{{ route('register') }}">Registrati</a></p>
                    </button>
                </div>
            </form> 
        </div>
        
    </div>
</div>




</x-layout>