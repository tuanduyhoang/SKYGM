@include('layouts.css')

<section class="vh-100" >
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              {{-- <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div> --}}
              <div class=" col-lg-12 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="{{ route('admin.login') }}" method="POST">
                    @csrf

                    <div class="d-flex align-items-center mb-3 pb-1">
                      {{-- <img src="{{asset('assets/images/logo2.png')}}" alt="" style="height: 100px"> --}}
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"><center>ADMIN</center></h5>

                    <div class="form-outline mb-4">

                      <label class="form-label" for="form2Example17">Email address</label>
                      <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" />
                    </div>

                    <div class="form-outline mb-4">

                      <label class="form-label" for="form2Example27">Password</label>
                      <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
                    </div>

                    <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="{{route('get.register')}}"
                        style="color: #393f81;">Register here</a></p>
                    <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"  />
<script>
    // kiểm tra tồn lại session hay ko?
    @if(session()->has('success'))
        // sử dụng thư viện js để hiển thị thông báo
        toastr.success('{{ session()->get("success") }}')
    @elseif(session()->has('error'))
        toastr.danger('{{ session()->get("error") }}')
    @endif

</script>
