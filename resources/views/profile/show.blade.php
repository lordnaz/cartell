@extends('layouts.layoutMaster')

@php
$breadcrumbs = [['link' => 'home', 'name' => 'Home'], ['link' => 'javascript:void(0)', 'name' => 'User'], ['name' => 'Profile']];
@endphp

@section('title', 'Profile')


@section('content')

  @if (Laravel\Fortify\Features::canUpdateProfileInformation())
   <div class="mb-4">
      @livewire('profile.update-profile-information-form')
   </div>
  @endif

  @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
    <div class="mb-4">
      @livewire('profile.update-password-form')
    </div>
  @endif

  <!-- Bank Section -->
  <div class="card mb-4">
    <div class="card-body">
      <h5 class="card-title">Bank Information</h5>
      <!-- <div class="card-subtitle text-muted mb-3">Card subtitle</div> -->
      <p class="card-text">
      Please follow these guidelines to ensure your Bank Account Statement is accepted: <br><br>
      Only a bank account with your name as the account holder is accepted.
      </p>
      <a href="/user/profile/bank" class="btn btn-outline-primary">Update Bank Information</a>
    </div>
  </div>

  <!-- Personal Info Section -->
  <div class="card mb-4">
    <div class="card-body">
      <h5 class="card-title">Personal Information</h5>
      <div class="card-subtitle text-muted mb-3">Card subtitle</div>
      <p class="card-text">
        Some quick example text to build on the card title and make up the bulk of the card's content.
      </p>
      <a href="javascript:void(0)" class="card-link">Card link</a>
      <a href="javascript:void(0)" class="card-link">Another link</a>
    </div>
  </div>

  <!-- Address Section -->
  <div class="card mb-4">
    <div class="card-body">
      <h5 class="card-title">Address Information</h5>
      <div class="card-subtitle text-muted mb-3">Card subtitle</div>
      <p class="card-text">
        Some quick example text to build on the card title and make up the bulk of the card's content.
      </p>
      <a href="javascript:void(0)" class="card-link">Card link</a>
      <a href="javascript:void(0)" class="card-link">Another link</a>
    </div>
  </div>

  @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
   <div class="mb-4">
      @livewire('profile.two-factor-authentication-form')
   </div>
  @endif

  <div class="mb-4">
    @livewire('profile.logout-other-browser-sessions-form')
  </div>

  @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
    @livewire('profile.delete-user-form')
  @endif

@endsection
