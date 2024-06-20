@extends('layouts/layoutMaster')

@section('title', 'eCommerce Dashboard - Apps')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/apex-charts/apex-charts.scss',
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/apex-charts/apexcharts.js',
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js'
  ])
@endsection

@section('page-script')
@vite([
    'resources/assets/js/app-ecommerce-dashboard.js',
    'resources/assets/js/app-ecommerce-order-list.js'
    ])
@endsection

@section('content')

<!-- Desktop View  -->
<section class="d-none d-lg-block">
    <div class="row">
        <div class="col-6">
            <div class="card" style="height: 180px">
                <div class="d-flex align-items-end row">
                    <div class="col-7">
                    <div class="card-body text-nowrap">
                        <h5 class="card-title mb-0">Welcome to CarTell <b class="text-primary">{{ Auth::user()->name }}</b> !🎉</h5>
                        <br>
                        <span class="">Here, you can <a class="text-primary" href="/"><b><u>rent</u></b></a> a car</span><br>
                        <span class="text-primary">OR</span><br>
                        <span class="">Register as a</span>&nbsp;&nbsp;
                        <a href="javascript:;" class="btn btn-outline-primary">Renter</a>
                    </div>
                    </div>
                    <div class="col-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="{{ asset('assets/img/illustrations/wizard-create-deal-confirm.png')}}" height="140" alt="view sales">
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="height: 180px">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="avatar flex-shrink-0 me-2">
                            <span class="avatar-initial rounded bg-label-success"><i class="ti ti-wallet ti-md"></i></span>
                        </div>
                        <div>
                            <h6 class="mb-0 text-nowrap">1891</h6>
                            <small>CT Points</small>
                        </div>
                    </div>
                    <br>
                    <p class="small">Collect CarTell (CT points) for every successful order.</p>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="row" style="margin-top: 50px;">
        <div class="col-9">
            <div class="card mb-4">
                <div class="card-widget-separator-wrapper">
                    <div class="card-body card-widget-separator">
                        <div class="row gy-4 gy-sm-1">
                            <div class="col-sm-6 col-lg-4">
                            <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                                <div>
                                <h4 class="mb-2">5</h4>
                                <p class="mb-0 fw-medium">Total Order</p>
                                </div>
                                <span class="avatar me-sm-4" onclick="window.location='/order'">
                                    <span class="avatar-initial bg-label-success rounded">
                                        <i class="ti-md ti ti-calendar-stats text-body"></i>
                                    </span>
                                </span>
                            </div>
                            <hr class="d-none d-sm-block d-lg-none me-4">
                            </div>
                            <div class="col-sm-6 col-lg-4">
                            <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                                <div>
                                <h4 class="mb-2">3</h4>
                                <p class="mb-0 fw-medium">Pending Renter Approval</p>
                                </div>
                                <span class="avatar p-2 me-lg-4" onclick="window.location='/order'">
                                    <span class="avatar-initial bg-label-warning rounded"><i class="ti-md ti ti-checks text-body"></i></span>
                                </span>
                            </div>
                            <hr class="d-none d-sm-block d-lg-none">
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                    <h4 class="mb-2">2</h4>
                                    <p class="mb-0 fw-medium">To Paid</p>
                                    </div>
                                    <span class="avatar p-2 me-sm-4" onclick="window.location='/order'">
                                        <span class="avatar-initial bg-label-danger rounded"><i class="ti-md ti ti-wallet text-body"></i></span>
                                    </span>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6 col-lg-3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                    <h4 class="mb-2">2</h4>
                                    <p class="mb-0 fw-medium">To Paid</p>
                                    </div>
                                    <span class="avatar p-2">
                                    <span class="avatar-initial bg-label-danger rounded"><i class="ti-md ti ti-alert-octagon text-body"></i></span>
                                    </span>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row" style="margin-top: 50px;">
        <div class="col-12">
            <div class="card">
                <div class="card-datatable table-responsive">
                    <table class="datatables-order table border-top">
                        <thead>
                            <tr>
                            <th></th>
                            <th></th>
                            <th>order</th>
                            <th>date</th>
                            <th>owner</th>
                            <th>status</th>
                            <th>payment</th>
                            <th>status</th>
                            <th>method</th>
                            <th>actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div> -->
</section>


<!-- Mobile view -->
<section class="d-block d-sm-none">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-7">
                    <div class="card-body text-nowrap">
                        <h5 class="card-title mb-0">Welcome to CarTell {{ Auth::user()->name }} !🎉</h5>
                        <p class="mb-2">You can rent a car using CarTell or</p>
                        <h4 class="text-primary mb-1">$48.9k</h4>
                        <a href="javascript:;" class="btn btn-primary">View Sales</a>
                    </div>
                    </div>
                    <div class="col-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="{{ asset('assets/img/illustrations/card-advance-sale.png')}}" height="140" alt="view sales">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br>


@endsection
