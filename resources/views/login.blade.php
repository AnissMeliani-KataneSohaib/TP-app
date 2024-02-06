<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<form action="{{route('login')}}" method="post">
  @csrf
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <div class="mb-md-5 mt-md-4 pb-5">
                    <h4>Se connecter</h4>
                    @error('login')
                    {{$message}}
                    @enderror
                    <div class="form-outline form-white mb-4">
                      <input  name="login" class="form-control form-control-lg" />
                      <label class="form-label">login</label>
                    </div>
                 
                    <div class="form-outline form-white mb-4">
                      <input type="password" name="password" class="form-control form-control-lg" />
                      <label class="form-label" >Password</label>
                    </div>
                   
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">connecter</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</form>