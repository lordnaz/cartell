@extends('layouts/layoutMaster')

@section('title', 'Help Center Landing - Front Pages')

@section('page-style')
@vite('resources/assets/vendor/scss/pages/front-page-help-center.scss')
@endsection

@section('content')
<!-- Help Center Header: Start -->

<nav class="navbar" style="background-color: #c81927">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1"><h3 class="text-white" style="font-style: oblique;">CARTELL</h3></span>
    <div class="float-right">
        <a href="{{url('/auth/login-cover')}}" class="btn btn-white" target="_blank"><span class="tf-icons ti ti-login scaleX-n1-rtl me-md-1"></span><span class="d-none d-md-block">Login/Register</span></a>
    </div>
  </div>
</nav>



<section class="section-py first-section-pt help-center-header position-relative overflow-hidden text-white" 
style="background: rgb(233,73,87);
background: linear-gradient(360deg, rgba(233,73,87,1) 0%, rgba(200,25,39,1) 100%);">
  <!-- <img class="banner-bg-img" src="{{asset('assets/img/pages/header.png')}}" alt="Help center header"> -->

  <h3 class="text-center text-white">Book and rent a car with us now!</h3>
  <div class="input-wrapper input-group input-group-lg input-group-merge position-relative mx-auto">
    <span class="input-group-text" id="basic-addon1"><i class="ti ti-navigation"></i></span> 
    <input type="text" class="form-control" placeholder="Address" aria-label="Search" aria-describedby="basic-addon1" />
  </div>
  <br>

  <div class="input-wrapper input-group input-group-lg input-group-merge mx-auto">
    <label for=""><b>Pickup Date and Time</b></label>
  </div>
  <div class="input-wrapper input-group input-group-lg input-group-merge position-relative mx-auto">
    <span class="input-group-text" id="basic-addon1"><i class="ti ti-calendar"></i></span> 
    <input class="form-control" type="datetime-local" value="Pick Up" id="html5-datetime-local-input" />
  </div>
  <br>

  
  <div class="input-wrapper input-group input-group-lg input-group-merge mx-auto">
    <label for=""><b>Dropoff Date and Time</b></label>
  </div>

  <div class="input-wrapper input-group input-group-lg input-group-merge mx-auto">
    <span class="input-group-text" id="basic-addon1"><i class="ti ti-clock"></i></span> 
    
    <input class="form-control" type="datetime-local" value="Drop Off" id="html5-datetime-local-input" />
  </div>
  <br>

  <div class="input-wrapper input-group-lg position-relative mx-auto">
        <div class="row mt-3">
          <div class="d-grid gap-2 col-lg-6 mx-auto">
            <button class="btn btn-outline-warning btn-lg" type="button" style="border: 2px solid #FFD400"><b>Delivery</b></button>
          </div>
          <div class="d-grid gap-2 col-lg-6 mx-auto">
            <button class="btn btn-warning btn-lg" type="button">Pickup</button>
          </div>
        </div>
  </div>



  
</div>
  <br>
  <p class="text-center text-white px-3 mb-0">Rent a car with cartell.my marketplace</p>
  <br><br>
</section>
<!-- Help Center Header: End -->

<!-- Popular Articles: Start -->
<section class="section-py" style="padding-top: 50px;">
  <div class="container">
    <h3 class="text-center mb-4 text-primary">Rental Car in your Area</h3>
    <div class="row">
      <div class="col-lg-8 mx-auto">

              <div class="card border shadow-none">
                <div class="card-body text-center">
                  <div class="d-flex gap-3">
                    <div class="flex-shrink-0 d-flex align-items-center">
                      <img src="{{asset('assets/img/car/car_suv.jpg')}}" alt="google home" class="w-px-100">
                    </div>
                    <div class="flex-grow-1">
                      <div class="row">
                        <div class="col-md-8">
                          <p class="me-3"><a href="javascript:void(0)" class="text-body">Proton X50</a></p>
                          <div class="text-muted mb-2 d-flex flex-wrap"><span class="me-1">Owner:</span> <a href="javascript:void(0)" class="me-3">Zakirin</a> <span class="badge bg-label-success">Available</span></div>
                          <div class="text-muted mb-2 d-flex flex-wrap"><span class="me-1">Type:</span> <a href="javascript:void(0)" class="me-3">SUV</a></div>
                          <div class="text-muted mb-2 d-flex flex-wrap"><span class="me-1">Seat:</span>
                          <!-- <div class="demo-inline-spacing"> -->
                            <p>
                              <span class="badge badge-center bg-primary">1</span>
                              <span class="badge badge-center bg-primary">2</span>
                              <span class="badge badge-center bg-primary">3</span>
                              <span class="badge badge-center bg-primary">4</span>
                              <span class="badge badge-center bg-primary">5</span>
                              <span class="badge badge-center bg-secondary">6</span>
                            </p>
                          <!-- </div> -->
                          </div>
                          
                        </div>
                        <div class="col-md-4">
                          <div class="text-md-end">
                            <button type="button" class="btn-close btn-pinned" aria-label="Close"></button>
                            <div class="my-2 my-md-4 mb-md-5"><s class="text-muted">RM250</s>&nbsp<span class="text-primary">RM200</span> /<span class="text-primary">Day</span></div>
                            <button type="button" class="btn btn-md btn-success mt-md-3">Book Now!</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <br>

              <div class="card border shadow-none">
                <div class="card-body text-center">
                  <div class="d-flex gap-3">
                    <div class="flex-shrink-0 d-flex align-items-center">
                      <img src="{{asset('assets/img/car/car_sport.png')}}" alt="google home" class="w-px-100">
                    </div>
                    <div class="flex-grow-1">
                      <div class="row">
                        <div class="col-md-8">
                          <p class="me-3"><a href="javascript:void(0)" class="text-body">Toyota Supra</a></p>
                          <div class="text-muted mb-2 d-flex flex-wrap"><span class="me-1">Owner:</span> <a href="javascript:void(0)" class="me-3">Zakirin</a> <span class="badge bg-label-success">Available</span></div>
                          <div class="text-muted mb-2 d-flex flex-wrap"><span class="me-1">Type:</span> <a href="javascript:void(0)" class="me-3">Sedan</a></div>
                          <div class="text-muted mb-2 d-flex flex-wrap"><span class="me-1">Seat:</span>
                          <!-- <div class="demo-inline-spacing"> -->
                            <p>
                              <span class="badge badge-center bg-primary">1</span>
                              <span class="badge badge-center bg-primary">2</span>
                              <span class="badge badge-center bg-secondary">3</span>
                              <span class="badge badge-center bg-secondary">4</span>
                              <span class="badge badge-center bg-secondary">5</span>
                              <span class="badge badge-center bg-secondary">6</span>
                            </p>
                          <!-- </div> -->
                          </div>
                          
                        </div>
                        <div class="col-md-4">
                          <div class="text-md-end">
                            <button type="button" class="btn-close btn-pinned" aria-label="Close"></button>
                            <div class="my-2 my-md-4 mb-md-5"><s class="text-muted">RM450</s>&nbsp<span class="text-primary">RM350</span> /<span class="text-primary">Day</span></div>
                            <button type="button" class="btn btn-md btn-success mt-md-3">Book Now!</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <br>

              <div class="card border shadow-none">
                <div class="card-body text-center">
                  <div class="d-flex gap-3">
                    <div class="flex-shrink-0 d-flex align-items-center">
                      <img src="{{asset('assets/img/car/car_sedan.webp')}}" alt="google home" class="w-px-100">
                    </div>
                    <div class="flex-grow-1">
                      <div class="row">
                        <div class="col-md-8">
                          <p class="me-3"><a href="javascript:void(0)" class="text-body">Proton Saga BLM</a></p>
                          <div class="text-muted mb-2 d-flex flex-wrap"><span class="me-1">Owner:</span> <a href="javascript:void(0)" class="me-3">Amat</a> <span class="badge bg-label-success">Available</span></div>
                          <div class="text-muted mb-2 d-flex flex-wrap"><span class="me-1">Type:</span> <a href="javascript:void(0)" class="me-3">Sedan</a></div>
                          <div class="text-muted mb-2 d-flex flex-wrap"><span class="me-1">Seat:</span>
                          <!-- <div class="demo-inline-spacing"> -->
                            <p>
                              <span class="badge badge-center bg-primary">1</span>
                              <span class="badge badge-center bg-primary">2</span>
                              <span class="badge badge-center bg-primary">3</span>
                              <span class="badge badge-center bg-primary">4</span>
                              <span class="badge badge-center bg-secondary">5</span>
                              <span class="badge badge-center bg-secondary">6</span>
                            </p>
                          <!-- </div> -->
                          </div>
                          
                        </div>
                        <div class="col-md-4">
                          <div class="text-md-end">
                            <button type="button" class="btn-close btn-pinned" aria-label="Close"></button>
                            <div class="my-2 my-md-4 mb-md-5"><s class="text-muted">RM150</s>&nbsp<span class="text-primary">RM90</span> /<span class="text-primary">Day</span></div>
                            <button type="button" class="btn btn-md btn-success mt-md-3">Book Now!</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              

              

<!-- Help Area: Start -->
<section class="section-py bg-body" style="padding-top: 100px; padding-bottom: 100px;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 text-center">
        <h3>Still need help?</h3>
        <p class="mb-3"> Our specialists are always happy to help.<br />Contact us during standard business hours or email us 24/7 and we'll get back to you. </p>
        <div class="d-flex justify-content-center flex-wrap gap-3">
          <a href="javascript:void(0);" class="btn btn-primary">Visit our community</a>
          <a href="javascript:void(0);" class="btn btn-primary">Contact us</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Help Area: End -->
@endsection
