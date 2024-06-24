<!-- Navbar -->
<nav class="navbar navbar-expand-lg  bg-nero border-bottom sticky-top">
    <!-- Container wrapper -->
    <div class="container-fluid ">
      <!-- Toggle button -->

      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img src="/img/miologo.png" id="logonav" class="d-block d-sm-block d-md-block d-lg-none">
          
      </a>
      <button
        data-mdb-collapse-init
        class="navbar-toggler"
        type="button"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
      
        <i class="fas fa-bars"></i>
        
        
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0  " href="#">
          <img src="/img/miologo.png" id="logonav" class="ms-3  d-none d-sm-none d-md-none d-lg-block">
            
        </a>
        <!-- Left links -->
        <ul class="navbar-nav ms-5 me-auto mb-2 mb-lg-0  ">
          <li class="nav-item ">
            <a class="nav-link text-light" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item    ">
            <a class="nav-link text-light" href="{{route('pokemon.index')}}">Pokèdex</a>
          </li>
      
          

          @guest
          <li class="nav-item">
            <a class="nav-link text-light" href="{{route('login')}}">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="{{route('register')}}">Registrati</a>
          </li>
           @else
          <li class="nav-item   d-block d-sm-block d-md-block d-lg-none ">
            <a class="nav-link text-light" href="{{route('pokemon.create')}}">Aggiungi Pokèmon</a>
          </li>
          <li class="nav-item   d-block d-sm-block d-md-block d-lg-none ">
            <a class="nav-link text-light" href="{{route('profile.profile')}}">My Profile</a>
          </li>
          <li class="nav-item d-block d-sm-block d-md-block d-lg-none">
            <form class="nav-link text-light" action="{{route('logout')}}" method="POST">
              @csrf
              <button class="dropdown-item" type="submit">Logout</button>
            </form>
           
          </li>


        </ul>
        <!-- Left links -->
      </div>
     
      
  
     
  <!-- Collapsible wrapper -->
      
        <!-- Avatar -->
        
        <div class="dropdown d-none d-sm-none d-md-none d-lg-block">
        
          <a
            data-mdb-dropdown-init
            class="dropdown-toggle d-flex align-items-center hidden-arrow"
            href="#"
            id="navbarDropdownMenuAvatar"
            role="button"
            aria-expanded="false"
          >
            <img
              src="{{Auth::user()->profile_photo_url}}"
              class="rounded-circle immagine me-2 me-md-5 profile-photo d-sm-block"
              height="50"
              width="50"
           
              loading="lazy"
            />
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar"
          >
            <li class="bg-nero pt-3 pb-1 text-center ">
              <p class=" text-light " >Ciao, {{Auth::user()->name}}</p>
            </li>
            <li>
              <a class="dropdown-item" href="{{route('pokemon.create')}}">Aggiungi Pokemon</a>
            </li>
            <li>
              <a class="dropdown-item" href="{{route('pokemon.index')}}">Pokèdex</a>
            </li>
            <li>
              <a class="dropdown-item" href="{{route('profile.profile')}}">My Profile</a>
            </li>
           
            <li>
              <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="dropdown-item" type="submit">Logout</button>
              </form>
             
            </li>
          </ul>
        </div>
        @endguest
      </div>
      <!-- Right elements -->
    </div>

   
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->