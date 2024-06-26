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

<h4 class="py-3 mb-4">
  Order List
</h4>

<!-- Desktop View  -->
<section class="d-none d-lg-block">

    <div class="row" style="margin-top: 50px;">
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
    </div>
</section>


<!-- Mobile view -->
<section class="d-block d-sm-none">
    <!-- <div class="row">
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
    </div> -->
</section>

<br><br>


@endsection
