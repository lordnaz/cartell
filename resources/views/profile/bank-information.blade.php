@extends('layouts.layoutMaster')

@php
$breadcrumbs = [['link' => 'home', 'name' => 'Home'], ['link' => 'javascript:void(0)', 'name' => 'User'], ['name' => 'Profile']];
@endphp

@section('title', 'Profile')


@section('content')

  <!-- Bank Section -->
  <div class="card mb-4">
    <div class="card-body">
      <h5 class="card-title">Bank Information</h5>
      <div class="card-subtitle text-muted mb-3">Card subtitle</div>
      <p class="card-text">
        Some quick example text to build on the card title and make up the bulk of the card's content.
      </p>
      <a href="javascript:void(0)" class="card-link">Card link</a>
      <a href="javascript:void(0)" class="card-link">Another link</a>
    </div>
  </div>

@endsection
