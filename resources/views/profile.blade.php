<x-layout 
title="profile"
>

    <x-header 
    title="Profilo"/>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-12 p-5">
            <div class="card mb-3 p-5 bg-nero text-light text-center" >
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{Auth::user()->profile_photo_url}}" class="img-fluid rounded-circle border" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p>UserName :</p>
                      <h5 class="card-title border rounded">{{Auth::user()->name}}</h5>
                      <p>email :</p>
                      <p class="card-text border rounded">{{Auth::user()->email}}</p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>

                      <button class="btn btn-secondary"> <a class="dropdown-item" href="{{route('profile.edit')}}">Modifica Profilo</a></button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

</x-layout>