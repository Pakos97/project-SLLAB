<footer class=" text-center navbar-dark bg-nero  border-top">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Form -->
      <section class="">
        <form action="{{route('newsletter.submit')}}" method="POST">
          @csrf
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2 text-light">
                <strong>
                  Registrati alla newsletter
                </strong>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" class="form-control" name="name" />
                <label class="form-label">Nome</label>
              </div>
              <!-- Email input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="email"  class="form-control" name="email" />
                <label class="form-label" >Email</label>
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button data-mdb-ripple-init type="submit" class="btn btn-secondary mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2024 Copyright:
      <a class="text-body" href="https://www.youtube.com/watch?v=ibQeaAi8Nx8">MasterPakòs</a>
    </div>
    <!-- Copyright -->
  </footer>