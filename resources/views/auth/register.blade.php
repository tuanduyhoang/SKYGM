@include('layouts.css')

<section class="vh-100" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="{{asset('assets/images/chip.avif')}}"
                                alt="login form" class="card-img" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form action="{{ route('post.register') }}" method="POST">
                                    @csrf

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fa-solid fa-laptop-code"></i>
                                        <span class="h1 fw-bold mb-0">SKYGM</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register your account
                                    </h5>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example17">Name</label>
                                        <input type="text" id="form2Example17"
                                            class="form-control form-control-lg" placeholder="" name="name" />

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example18">Email address</label>
                                        <input type="email" id="form2Example18"
                                            class="form-control form-control-lg" name="email" />

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example28">Password</label>
                                        <input type="password" id="form2Example28"
                                            class="form-control form-control-lg" name="password" />

                                    </div>

                                    {{-- <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example29">Confirm Password</label>
                                        <input type="password" id="form2Example29"
                                            class="form-control form-control-lg" name="password" />

                                    </div> --}}


                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-outline-warning btn-lg btn-block" type="submit">Register</button>
                                    </div>

                                    {{-- <a class="small text-muted" href="#!">Forgot password?</a> --}}
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Already registered? <a
                                            href="{{route('get.login')}}" style="color: #393f81;">Login here</a></p>
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





<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<script>
    // kiểm tra tồn lại session hay ko?
    @if (session()->has('success'))
        // sử dụng thư viện js để hiển thị thông báo
        toastr.success('{{ session()->get('success') }}')
    @elseif (session()->has('error'))
        toastr.danger('{{ session()->get('error') }}')
    @endif
</script>
