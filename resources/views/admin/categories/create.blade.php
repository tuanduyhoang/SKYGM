@extends('admin.master')
@section('content')

<section class="body1">

    <div class="container py-5">
     <div class="row">
          <div class="col-lg-7 mx-auto">
            <div class="bg-white rounded-lg shadow-sm p-5">

              <!-- Credit card form tabs -->
              <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
                <li class="nav-item">
                  <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
                                      <i class="fa fa-credit-card"></i>
                                      {{Auth::user()->name}}
                                  </a>
                </li>
                {{-- <li class="nav-item">
                  <a data-toggle="pill" href="#nav-tab-paypal" class="nav-link rounded-pill">
                                      <i class="fa fa-paypal"></i>
                                      Paypal
                                  </a>
                </li>
                <li class="nav-item">
                  <a data-toggle="pill" href="#nav-tab-bank" class="nav-link rounded-pill">
                                      <i class="fa fa-university"></i>
                                       Bank Transfer
                                   </a>
                </li> --}}
              </ul>
              <!-- End -->


              <!-- Credit card form content -->
              <div class="tab-content">

                <!-- credit card info-->
                <div id="nav-tab-card" class="tab-pane fade show active">
                  {{-- <p class="alert alert-success">Some text success or error</p> --}}
                  <form role="form" action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if($errors = session()->get('errors'))
                    <ul>
                        @foreach ($errors->messages() as $error)
                        <li>{{ $error[0] }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" placeholder="Enter here" required class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Description</label>
                      <input type="textarea" class="form-control" id="pwd" placeholder="Enter here" name="description">
                      {{-- <div class="input-group">
                        <input type="text" name="cardNumber" placeholder="Your card number" class="form-control" required>
                        <div class="input-group-append">
                          <span class="input-group-text text-muted">
                                                      <i class="fa fa-cc-visa mx-1"></i>
                                                      <i class="fa fa-cc-amex mx-1"></i>
                                                      <i class="fa fa-cc-mastercard mx-1"></i>
                                                  </span>
                        </div>
                      </div> --}}
                    </div>
                    <div class="form-group">
                        <label for="img">Image</label>
                        <input type="file" name="img" id="img" required class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="stt">Status</label>
                        {{-- <input type="text" name="name" id="name" placeholder="Enter here" required class="form-control"> --}}
                        <select class="form-control" name="status" id="status">
                            <option value="0">Không hoạt động</option>
                            <option value="1">Hoạt động</option>
                        </select>
                      </div>
                    <button type="submit" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Create  </button>
                  </form>
                </div>
                <!-- End -->

                <!-- Paypal info -->
                <div id="nav-tab-paypal" class="tab-pane fade">
                  <p>Paypal is easiest way to pay online</p>
                  <p>
                    <button type="button" class="btn btn-primary rounded-pill"><i class="fa fa-paypal mr-2"></i> Log into my Paypal</button>
                  </p>
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                <!-- End -->

                <!-- bank transfer info -->
                <div id="nav-tab-bank" class="tab-pane fade">
                  <h6>Bank account details</h6>
                  <dl>
                    <dt>Bank</dt>
                    <dd> THE WORLD BANK</dd>
                  </dl>
                  <dl>
                    <dt>Account number</dt>
                    <dd>7775877975</dd>
                  </dl>
                  <dl>
                    <dt>IBAN</dt>
                    <dd>CZ7775877975656</dd>
                  </dl>
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                <!-- End -->
              </div>
              <!-- End -->

            </div>
          </div>
        </div>
      </div>


</section>

@endsection
