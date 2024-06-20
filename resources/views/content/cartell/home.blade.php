@extends('layouts/layoutMaster')

@section('title', 'Help Center Landing - Front Pages')

@section('page-style')
@vite('resources/assets/vendor/scss/pages/front-page-help-center.scss')
@endsection

@section('content')
<!-- Help Center Header: Start -->

<nav class="navbar" style="background-color: #c81927">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">
      <img src="{{asset('assets/img/branding/cartell_logo.png')}}" alt="CARTELL" class="w-px-150">  
    </span>
    <div class="" style="padding-right: 50px;">
        @if (Auth::check())
        <!-- <span class="text-white">Hi {{Auth::user()->name}}</span> <a href="{{url('/register')}}" class="btn btn-white" target="_blank"><span class="tf-icons ti ti-login scaleX-n1-rtl me-md-1"></span><span class="d-none d-md-block">Dashboard</span></a> -->
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="d-flex">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar avatar-online border-4 border-warning">
                    <img src="{{ Auth::user() ? Auth::user()->profile_photo_url : asset('assets/img/avatars/1.png') }}" alt class="h-auto rounded-circle" style="border: 2px solid white">
                  </div>
                </div>
                <div class="flex-grow-1">
                  <span class="fw-medium d-block text-white">
                    Hello! 
                  </span>
                  <span class="fw-medium d-block text-white">
                    @if (Auth::check())
                      {{ Auth::user()->name }}
                    @else
                    John Doe
                    @endif
                  </span>
                </div>
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" style="margin-right: 50px;">
              
              <li>
                <!-- <a class="dropdown-item" href="{{ Route::has('profile.show') ? route('profile.show') : url('pages/profile-user') }}">
                  <i class="ti ti-user-check me-2 ti-sm"></i>
                  <span class="align-middle">My Dashboard</span>
                </a> -->
                <a class="dropdown-item" href="{{ route('my-dashboard') }}">
                  <i class="ti ti-user-check me-2 ti-sm"></i>
                  <span class="align-middle">My Dashboard</span>
                </a>
              </li>
              <!-- @if (Auth::check() && Laravel\Jetstream\Jetstream::hasApiFeatures())
              <li>
                <a class="dropdown-item" href="{{ route('api-tokens.index') }}">
                  <i class='ti ti-key me-2 ti-sm'></i>
                  <span class="align-middle">API Tokens</span>
                </a>
              </li>
              @endif -->
              <!-- <li>
                <a class="dropdown-item" href="{{url('app/invoice/list')}}">
                  <span class="d-flex align-items-center align-middle">
                    <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                    <span class="flex-grow-1 align-middle">Order</span>
                    <span class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20">2</span>
                  </span> </a>
              </li> -->
              <!-- @if (Auth::User() && Laravel\Jetstream\Jetstream::hasTeamFeatures())
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <h6 class="dropdown-header">Manage Team</h6>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="{{ Auth::user() ? route('teams.show', Auth::user()->currentTeam->id) : 'javascript:void(0)' }}">
                  <i class='ti ti-settings me-2'></i>
                  <span class="align-middle">Team Settings</span>
                </a>
              </li>
              @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
              <li>
                <a class="dropdown-item" href="{{ route('teams.create') }}">
                  <i class='ti ti-user me-2'></i>
                  <span class="align-middle">Create New Team</span>
                </a>
              </li>
              @endcan
              @if (Auth::user()->allTeams()->count() > 1)
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <h6 class="dropdown-header">Switch Teams</h6>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              @endif -->
              <!-- @if (Auth::user())
              @foreach (Auth::user()->allTeams() as $team)
              {{-- Below commented code read by artisan command while installing jetstream. !! Do not remove if you want to use jetstream. --}}

              <x-switchable-team :team="$team" />
              @endforeach
              @endif
              @endif
              <li>
                <div class="dropdown-divider"></div>
              </li> -->
              @if (Auth::check())
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class='ti ti-logout me-2'></i>
                  <span class="align-middle">Logout</span>
                </a>
              </li>
              <form method="POST" id="logout-form" action="{{ route('logout') }}">
                @csrf
              </form>
              @else
              <li>
                <a class="dropdown-item" href="{{ Route::has('login') ? route('login') : url('auth/login-basic') }}">
                  <i class='ti ti-login me-2'></i>
                  <span class="align-middle">Login</span>
                </a>
              </li>
              @endif
            </ul>
        @else
        <a href="{{url('/login')}}" class="btn btn-white"><span class="tf-icons ti ti-login scaleX-n1-rtl me-md-1"></span><span class="d-none d-md-block">Login/Register</span></a>
        @endif
        
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

<!-- Category Area: Start  -->

<section class="section-py" style="padding-top: 50px; background-color: white;">
  <div class="container">
  <h3 class="text-primary">Popular Search</h3>
  <p class="mb-4">From Cars to Vans, Lorry's to Bikes, Cameras to Outdoors and many more...</p>
    <div class="row">
      <div class="col-2">
        <div class="card shadow-none">
          <div class="card-body text-center">
            <!-- <div class="badge rounded-pill p-2 bg-label-danger mb-2"><i class="ti ti-car ti-sm"></i></div> -->
            <img src="{{asset('assets/img/illustrations/car_category.png')}}" alt="CAR" class="w-75 h-75" style="">
            <h6 class="card-title">CARS</h6>
            <!-- <small>Orders</small> -->
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card shadow-none">
          <div class="card-body text-center">
            <!-- <div class="badge rounded-pill p-2 bg-label-danger mb-2"><i class="ti ti-car ti-sm"></i></div> -->
            <img src="{{asset('assets/img/illustrations/van_category.png')}}" alt="VAN" class="w-75 h-75" style="">
            <h6 class="card-title">VAN</h6>
            <!-- <small>Orders</small> -->
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card shadow-none">
          <div class="card-body text-center">
            <!-- <div class="badge rounded-pill p-2 bg-label-danger mb-2"><i class="ti ti-car ti-sm"></i></div> -->
            <img src="{{asset('assets/img/illustrations/lorry_category.png')}}" alt="LORRY" class="w-75 h-75" style="">
            <h6 class="card-title">LORRY</h6>
            <!-- <small>Orders</small> -->
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card shadow-none">
          <div class="card-body text-center">
            <!-- <div class="badge rounded-pill p-2 bg-label-danger mb-2"><i class="ti ti-car ti-sm"></i></div> -->
            <img src="{{asset('assets/img/illustrations/bike_category.png')}}" alt="BIKE" class="w-75 h-75" style="">
            <h6 class="card-title">BIKE</h6>
            <!-- <small>Orders</small> -->
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card shadow-none">
          <div class="card-body text-center">
            <!-- <div class="badge rounded-pill p-2 bg-label-danger mb-2"><i class="ti ti-car ti-sm"></i></div> -->
            <img src="{{asset('assets/img/illustrations/camera_category.png')}}" alt="CAMERA" class="w-75 h-75" style="">
            <h6 class="card-title">CAMERA</h6>
            <!-- <small>Orders</small> -->
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card shadow-none">
          <div class="card-body text-center">
            <!-- <div class="badge rounded-pill p-2 bg-label-danger mb-2"><i class="ti ti-car ti-sm"></i></div> -->
            <img src="{{asset('assets/img/illustrations/outdoor_category.png')}}" alt="OUTDOOR" class="w-75 h-75" style="">
            <h6 class="card-title">OUTDOOR</h6>
            <!-- <small>Orders</small> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Category Area: End  -->

<!-- Popular Articles: Start -->
<section class="section-py" style="background-color: white;">
  <div class="container">
    <h3 class="mb-4 text-primary">Rental Car in your Area</h3>
    <div class="row">
      <div class="col-lg-8">
              <!-- featured START  -->
              <div class="row">
                <div class="col">

                  <div class="row text-center bg-warning m-0">
                    <h6 class="card-subtitle text-dark m-1">Featured</h6>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="card border border-warning rounded-0 shadow-none mb-1">
                        <div class="card-body" style="font-size: small">
                          <img class="img-fluid d-flex mx-auto rounded mb-1" src="{{asset('assets/img/car/perodua_axia.jpeg')}}" alt="Card image cap" />
                          <strong class="card-text text-dark">Perodua Axia XM 1.3 (White) Manual</strong><br>

                          <span class="me-1"><i class="ti ti-users ti-xs"></i> 4 Seat</span><br>
                          <span class="me-1"><i class="ti ti-map-pin ti-xs"></i> Batu Caves, Selangor</span><br>
                          <span class="me-1"><i class="ti ti-car ti-xs"></i> Hatchback</span><br>
                          <span class="me-1 badge bg-label-primary">Petrol</span>

                          
                          

                          <div class="d-grid mt-4">
                            <div class="fs-6"><s class="text-muted">RM250</s>&nbsp<b class="text-primary">RM200</b> /<span class="text-primary">Day</span></div>
                            <button type="button" class="btn btn-sm btn-warning">Book Now!</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                </div>
                <div class="col">

                  <div class="row text-center bg-warning m-0">
                    <h6 class="card-subtitle text-dark m-1">Featured</h6>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="card border border-warning rounded-0 shadow-none mb-1">
                        <div class="card-body" style="font-size: small">
                          <!-- <img class="img-fluid d-flex mx-auto rounded mb-1" src="{{asset('assets/img/car/lambo.jpeg')}}" alt="Card image cap" /> -->
                          <div class="flex-shrink-0 d-flex align-items-center">
                            <img src="{{asset('assets/img/car/lambo.jpeg')}}" alt="google home" class="img-fluid d-flex mx-auto rounded mb-1" style="border-radius: 0.375rem;">
                          </div>
                          
                          <strong class="card-text text-dark">Lamborghini Abentadol XM 1.5 (Yellow) Manual</strong><br>

                          <span class="me-1"><i class="ti ti-users ti-xs"></i> 2 Seat</span><br>
                          <span class="me-1"><i class="ti ti-map-pin ti-xs"></i> Kuala Lumpur</span><br>
                          <span class="me-1"><i class="ti ti-car ti-xs"></i> Sports</span><br>
                          <span class="me-1 badge bg-label-primary">Petrol</span>

                          
                          <div class="d-grid mt-4">
                            <div class="fs-6"><s class="text-muted">RM1250</s>&nbsp<b class="text-primary">RM1000</b> /<span class="text-primary">Day</span></div>
                            <button type="button" class="btn btn-sm btn-warning">Book Now!</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col">

                  <div class="row text-center bg-warning m-0">
                    <h6 class="card-subtitle text-dark m-1">Featured</h6>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="card border border-warning rounded-0 shadow-none mb-1">
                        <div class="card-body" style="font-size: small">
                          <!-- <img class="img-fluid d-flex mx-auto rounded mb-1" src="{{asset('assets/img/car/byd_dolphin.jpeg')}}" alt="Card image cap" /> -->
                          <div class="flex-shrink-0 d-flex align-items-center">
                            <img src="{{asset('assets/img/car/byd_dolphin.jpeg')}}" alt="google home" class="img-fluid d-flex mx-auto rounded mb-1" style="border-radius: 0.375rem;">
                          </div>

                          <strong class="card-text text-dark">Build Your Dream, BYD Dolphin GTR 2.0 (A) EV</strong><br>

                          <span class="me-1"><i class="ti ti-users ti-xs"></i> 4 Seat</span><br>
                          <span class="me-1"><i class="ti ti-map-pin ti-xs"></i> Tanjung Malim, Perak</span><br>
                          <span class="me-1"><i class="ti ti-car ti-xs"></i> Hatchback</span><br>
                          <span class="me-1 badge bg-label-success">EV</span>

                          
                          <div class="d-grid mt-4">
                          <div class="fs-6"><s class="text-muted">RM350</s>&nbsp<b class="text-primary">RM200</b> /<span class="text-primary">Day</span></div>
                            <button type="button" class="btn btn-sm btn-warning">Book Now!</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <!-- featured END   -->

              <div class="row" style="overflow-y: scroll; height: 800px; margin-top: 25px;">
                <div class="card border border-start-0 border-end-0 rounded-0 shadow-none mb-1 mt-4">
                  <div class="card-body text-center">
                    <div class="d-flex gap-3">
                      <div class="flex-shrink-0 d-flex align-items-center">
                        <img src="{{asset('assets/img/car/supra.jpeg')}}" alt="google home" class="w-px-150" style="border-radius: 0.375rem;">
                      </div>
                      <div class="flex-grow-1">
                        <div class="row">
                        <div class="text-left" style="text-align: left !important">
                        <strong class="me-3"><a href="javascript:void(0)" class="text-black">Toyota Supra XM 2.4 (A) ORI MILEAGE</a></strong>
                        </div>
                        
                          <div class="col-md-8" style="font-size: small">
                            
                            <div class="row">
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                  <span class="me-1"><i class="ti ti-users ti-xs"></i> 2 Seat</span><br>
                                  <span class="me-1"><i class="ti ti-map-pin ti-xs"></i> Kuala Lumpur</span>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                  <span class="me-1"><i class="ti ti-car ti-xs"></i> Sedan</span><br>
                                  <span class="me-1 badge bg-label-primary">Petrol</span>
                                </div>
                              </div>
                            </div>
                            
                          </div>
                          <div class="col-md-4">
                            <div class="text-md-end">
                              <!-- <button type="button" class="btn-close btn-pinned" aria-label="Close"></button> -->
                              <div class=""><s class="text-muted">RM250</s>&nbsp<b class="text-primary">RM200</b> /<span class="text-primary">Day</span></div>
                              <button type="button" class="btn btn-sm btn-success mt-3">Book Now!</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card border border-start-0 border-end-0 rounded-0 shadow-none mb-1">
                  <div class="card-body text-center">
                    <div class="d-flex gap-3">
                      <div class="flex-shrink-0 d-flex align-items-center">
                        <img src="{{asset('assets/img/car/ford.jpeg')}}" alt="google home" class="w-px-150" style="border-radius: 0.375rem;">
                      </div>
                      <div class="flex-grow-1">
                        <div class="row">
                        <div class="text-left" style="text-align: left !important">
                        <strong class="me-3"><a href="javascript:void(0)" class="text-black">Ford Ranger Raptor XM 2.0 (A)</a></strong>
                        </div>
                        
                          <div class="col-md-8" style="font-size: small">
                            
                            <div class="row">
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                  <span class="me-1"><i class="ti ti-users ti-xs"></i> 4 Seat</span><br>
                                  <span class="me-1"><i class="ti ti-map-pin ti-xs"></i> Petaling Jaya</span>                                
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                <span class="me-1"><i class="ti ti-car ti-xs"></i> Pickup</span><br>
                                  <span class="badge bg-label-info">Diesel</span>
                                  
                                </div>
                              </div>
                            </div>
                            
                          </div>
                          <div class="col-md-4">
                            <div class="text-md-end">
                              <!-- <button type="button" class="btn-close btn-pinned" aria-label="Close"></button> -->
                              <div class=""><b class="text-primary">RM300</b> /<span class="text-primary">Day</span></div>
                              <button type="button" class="btn btn-sm btn-success mt-3">Book Now!</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="card border border-start-0 border-end-0 rounded-0 shadow-none mb-1">
                  <div class="card-body text-center">
                    <div class="d-flex gap-3">
                      <div class="flex-shrink-0 d-flex align-items-center">
                        <img src="{{asset('assets/img/car/proton.jpeg')}}" alt="google home" class="w-px-150" style="border-radius: 0.375rem;">
                      </div>
                      <div class="flex-grow-1">
                        <div class="row">
                        <div class="text-left" style="text-align: left !important">
                        <strong class="me-3"><a href="javascript:void(0)" class="text-black">Proton S70 XM 1.6 (A) EBONY BLACK</a></strong>
                        </div>
                        
                          <div class="col-md-8" style="font-size: small">
                            
                            <div class="row">
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                  <span class="me-1"><i class="ti ti-users ti-xs"></i> 4 Seat</span><br>
                                  <span class="me-1"><i class="ti ti-map-pin ti-xs"></i> Shah Alam</span>
                                  
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                  <span class="me-1"><i class="ti ti-car ti-xs"></i>Sedan</span><br>
                                  <span class="badge bg-label-success">EV</span>
                                  
                                </div>
                              </div>
                            </div>
                            
                          </div>
                          <div class="col-md-4">
                            <div class="text-md-end">
                              <!-- <button type="button" class="btn-close btn-pinned" aria-label="Close"></button> -->
                              <div class=""><s class="text-muted">RM150</s>&nbsp<b class="text-primary">RM100</b> /<span class="text-primary">Day</span></div>
                              <button type="button" class="btn btn-sm btn-success mt-3">Book Now!</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="card border border-start-0 border-end-0 rounded-0 shadow-none mb-1 mt-4">
                  <div class="card-body text-center">
                    <div class="d-flex gap-3">
                      <div class="flex-shrink-0 d-flex align-items-center">
                        <img src="{{asset('assets/img/car/supra.jpeg')}}" alt="google home" class="w-px-150" style="border-radius: 0.375rem;">
                      </div>
                      <div class="flex-grow-1">
                        <div class="row">
                        <div class="text-left" style="text-align: left !important">
                        <strong class="me-3"><a href="javascript:void(0)" class="text-black">Toyota Supra XM 2.4 (A) ORI MILEAGE</a></strong>
                        </div>
                        
                          <div class="col-md-8" style="font-size: small">
                            
                            <div class="row">
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                  <span class="me-1"><i class="ti ti-users ti-xs"></i> 2 Seat</span><br>
                                  <span class="me-1"><i class="ti ti-map-pin ti-xs"></i> Kuala Lumpur</span>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                  <span class="me-1"><i class="ti ti-car ti-xs"></i> Sedan</span><br>
                                  <span class="me-1 badge bg-label-primary">Petrol</span>
                                </div>
                              </div>
                            </div>
                            
                          </div>
                          <div class="col-md-4">
                            <div class="text-md-end">
                              <!-- <button type="button" class="btn-close btn-pinned" aria-label="Close"></button> -->
                              <div class=""><s class="text-muted">RM250</s>&nbsp<b class="text-primary">RM200</b> /<span class="text-primary">Day</span></div>
                              <button type="button" class="btn btn-sm btn-success mt-3">Book Now!</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card border border-start-0 border-end-0 rounded-0 shadow-none mb-1">
                  <div class="card-body text-center">
                    <div class="d-flex gap-3">
                      <div class="flex-shrink-0 d-flex align-items-center">
                        <img src="{{asset('assets/img/car/ford.jpeg')}}" alt="google home" class="w-px-150" style="border-radius: 0.375rem;">
                      </div>
                      <div class="flex-grow-1">
                        <div class="row">
                        <div class="text-left" style="text-align: left !important">
                        <strong class="me-3"><a href="javascript:void(0)" class="text-black">Ford Ranger Raptor XM 2.0 (A)</a></strong>
                        </div>
                        
                          <div class="col-md-8" style="font-size: small">
                            
                            <div class="row">
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                  <span class="me-1"><i class="ti ti-users ti-xs"></i> 4 Seat</span><br>
                                  <span class="me-1"><i class="ti ti-map-pin ti-xs"></i> Petaling Jaya</span>                                
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                <span class="me-1"><i class="ti ti-car ti-xs"></i> Pickup</span><br>
                                  <span class="badge bg-label-info">Diesel</span>
                                  
                                </div>
                              </div>
                            </div>
                            
                          </div>
                          <div class="col-md-4">
                            <div class="text-md-end">
                              <!-- <button type="button" class="btn-close btn-pinned" aria-label="Close"></button> -->
                              <div class=""><b class="text-primary">RM300</b> /<span class="text-primary">Day</span></div>
                              <button type="button" class="btn btn-sm btn-success mt-3">Book Now!</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="card border border-start-0 border-end-0 rounded-0 shadow-none mb-1">
                  <div class="card-body text-center">
                    <div class="d-flex gap-3">
                      <div class="flex-shrink-0 d-flex align-items-center">
                        <img src="{{asset('assets/img/car/proton.jpeg')}}" alt="google home" class="w-px-150" style="border-radius: 0.375rem;">
                      </div>
                      <div class="flex-grow-1">
                        <div class="row">
                        <div class="text-left" style="text-align: left !important">
                        <strong class="me-3"><a href="javascript:void(0)" class="text-black">Proton S70 XM 1.6 (A) EBONY BLACK</a></strong>
                        </div>
                        
                          <div class="col-md-8" style="font-size: small">
                            
                            <div class="row">
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                  <span class="me-1"><i class="ti ti-users ti-xs"></i> 4 Seat</span><br>
                                  <span class="me-1"><i class="ti ti-map-pin ti-xs"></i> Shah Alam</span>
                                  
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                  <span class="me-1"><i class="ti ti-car ti-xs"></i>Sedan</span><br>
                                  <span class="badge bg-label-success">EV</span>
                                  
                                </div>
                              </div>
                            </div>
                            
                          </div>
                          <div class="col-md-4">
                            <div class="text-md-end">
                              <!-- <button type="button" class="btn-close btn-pinned" aria-label="Close"></button> -->
                              <div class=""><s class="text-muted">RM150</s>&nbsp<b class="text-primary">RM100</b> /<span class="text-primary">Day</span></div>
                              <button type="button" class="btn btn-sm btn-success mt-3">Book Now!</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card border border-start-0 border-end-0 rounded-0 shadow-none mb-1 mt-4">
                  <div class="card-body text-center">
                    <div class="d-flex gap-3">
                      <div class="flex-shrink-0 d-flex align-items-center">
                        <img src="{{asset('assets/img/car/supra.jpeg')}}" alt="google home" class="w-px-150" style="border-radius: 0.375rem;">
                      </div>
                      <div class="flex-grow-1">
                        <div class="row">
                        <div class="text-left" style="text-align: left !important">
                        <strong class="me-3"><a href="javascript:void(0)" class="text-black">Toyota Supra XM 2.4 (A) ORI MILEAGE</a></strong>
                        </div>
                        
                          <div class="col-md-8" style="font-size: small">
                            
                            <div class="row">
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                  <span class="me-1"><i class="ti ti-users ti-xs"></i> 2 Seat</span><br>
                                  <span class="me-1"><i class="ti ti-map-pin ti-xs"></i> Kuala Lumpur</span>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                  <span class="me-1"><i class="ti ti-car ti-xs"></i> Sedan</span><br>
                                  <span class="me-1 badge bg-label-primary">Petrol</span>
                                </div>
                              </div>
                            </div>
                            
                          </div>
                          <div class="col-md-4">
                            <div class="text-md-end">
                              <!-- <button type="button" class="btn-close btn-pinned" aria-label="Close"></button> -->
                              <div class=""><s class="text-muted">RM250</s>&nbsp<b class="text-primary">RM200</b> /<span class="text-primary">Day</span></div>
                              <button type="button" class="btn btn-sm btn-success mt-3">Book Now!</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card border border-start-0 border-end-0 rounded-0 shadow-none mb-1">
                  <div class="card-body text-center">
                    <div class="d-flex gap-3">
                      <div class="flex-shrink-0 d-flex align-items-center">
                        <img src="{{asset('assets/img/car/ford.jpeg')}}" alt="google home" class="w-px-150" style="border-radius: 0.375rem;">
                      </div>
                      <div class="flex-grow-1">
                        <div class="row">
                        <div class="text-left" style="text-align: left !important">
                        <strong class="me-3"><a href="javascript:void(0)" class="text-black">Ford Ranger Raptor XM 2.0 (A)</a></strong>
                        </div>
                        
                          <div class="col-md-8" style="font-size: small">
                            
                            <div class="row">
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                  <span class="me-1"><i class="ti ti-users ti-xs"></i> 4 Seat</span><br>
                                  <span class="me-1"><i class="ti ti-map-pin ti-xs"></i> Petaling Jaya</span>                                
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                <span class="me-1"><i class="ti ti-car ti-xs"></i> Pickup</span><br>
                                  <span class="badge bg-label-info">Diesel</span>
                                  
                                </div>
                              </div>
                            </div>
                            
                          </div>
                          <div class="col-md-4">
                            <div class="text-md-end">
                              <!-- <button type="button" class="btn-close btn-pinned" aria-label="Close"></button> -->
                              <div class=""><b class="text-primary">RM300</b> /<span class="text-primary">Day</span></div>
                              <button type="button" class="btn btn-sm btn-success mt-3">Book Now!</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="card border border-start-0 border-end-0 rounded-0 shadow-none mb-1">
                  <div class="card-body text-center">
                    <div class="d-flex gap-3">
                      <div class="flex-shrink-0 d-flex align-items-center">
                        <img src="{{asset('assets/img/car/proton.jpeg')}}" alt="google home" class="w-px-150" style="border-radius: 0.375rem;">
                      </div>
                      <div class="flex-grow-1">
                        <div class="row">
                        <div class="text-left" style="text-align: left !important">
                        <strong class="me-3"><a href="javascript:void(0)" class="text-black">Proton S70 XM 1.6 (A) EBONY BLACK</a></strong>
                        </div>
                        
                          <div class="col-md-8" style="font-size: small">
                            
                            <div class="row">
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                  <span class="me-1"><i class="ti ti-users ti-xs"></i> 4 Seat</span><br>
                                  <span class="me-1"><i class="ti ti-map-pin ti-xs"></i> Shah Alam</span>
                                  
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="" style="text-align: left !important;">
                                  <span class="me-1"><i class="ti ti-car ti-xs"></i>Sedan</span><br>
                                  <span class="badge bg-label-success">EV</span>
                                  
                                </div>
                              </div>
                            </div>
                            
                          </div>
                          <div class="col-md-4">
                            <div class="text-md-end">
                              <!-- <button type="button" class="btn-close btn-pinned" aria-label="Close"></button> -->
                              <div class=""><s class="text-muted">RM150</s>&nbsp<b class="text-primary">RM100</b> /<span class="text-primary">Day</span></div>
                              <button type="button" class="btn btn-sm btn-success mt-3">Book Now!</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              


      </div>

      <!-- Ads Section   -->

      <div class="col-lg-4">
        <div class="card border rounded-0 shadow-none mb-1">
          <div class="card-body text-center">
            <div class="bg-primary rounded-1">
              <h5 class="mb-4 text-white p-4">ERILAVIA Air Freshener 20% Discount. SHOP NOW!</h5>
            </div>
            
            <div class="align-items-center">
              <img src="{{asset('assets/img/branding/erilavia.jpeg')}}" alt="google home" class="w-100 h-auto rounded-1 shadow" style="">
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>    

              

              

<!-- Help Area: Start -->
<section class="section-py" style="padding-top: 100px; padding-bottom: 100px; background-color: white">
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
