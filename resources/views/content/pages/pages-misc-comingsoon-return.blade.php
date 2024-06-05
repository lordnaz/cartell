@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Coming Soon - Pages')

@section('page-style')
<!-- Page -->
@vite('resources/assets/vendor/scss/pages/page-misc.scss')
@endsection

@section('content')
<!-- Coming soon -->
<div class="container-xxl container-p-y" style="background: rgb(254,222,154);
background: linear-gradient(360deg, rgba(254,222,154,1) 0%, rgba(253,187,45,1) 100%);">
  <div class="misc-wrapper">
    <h2 class="mb-1 mx-2"><strong style="color: #C81927">Thanks! {{ $subscriber }}</strong> {{ $message }}</h2>
    <p class="mb-4 mx-2">You will get notified via email when it's ready!</p>
    <!-- <form onsubmit="return false" class="mb-4"> -->
    <form action="/new_subscription" method="post" enctype="multipart/form-data" accept-charset='UTF-8' class="form form-horizontal">
    @csrf 
      <div class="mb-0">
      <a href="{{url('/')}}" class="btn btn-primary mb-4">Back to home</a>
        <!-- <div class="input-group">
          <input type="text" class="form-control" name="email_subscriber" placeholder="email" autofocus>
          <button type="submit" class="btn btn-primary">Notify</button>
        </div> -->
      </div>
    </form>
    <div class="mt-4">
    <!-- <img src="{{ asset('assets/img/illustrations/card-advance-sale.png') }}" alt="page-misc-under-maintenance" width="550" class="img-fluid"> -->
    </div>
  </div>
</div>
<!-- <div class="container-fluid misc-bg-wrapper misc-under-maintenance-bg-wrapper">
  <img src="{{ asset('assets/img/illustrations/bg-shape-image-'.$configData['style'].'.png') }}" alt="page-misc-under-maintenance" data-app-light-img="illustrations/bg-shape-image-light.png" data-app-dark-img="illustrations/bg-shape-image-dark.png">
</div> -->
<!-- /Coming soon -->
@endsection
