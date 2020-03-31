@extends('layouts.app')
@section('title','Register')
@section('content')
<div class="container my-5">

<!-- Section -->
<section>

  <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">car ifinder</h6>
  <h3 class="font-weight-normal text-center dark-grey-text pb-2 display-4" style="text-transform:uppercase"><strong>Free Account Creation</strong></h3>
  <hr class="w-header my-4">
  <p class="lead text-center text-muted pt-2 mb-5">We are waiting for you to buy our expensive cars, go ahead and create your account.</p>
      
  <form method="post" action="{{ route('register') }}">
  @csrf
  <!--First row-->
  <div class="row d-flex justify-content-center">

    <!--First column-->
    <div class="col-6">

      <!-- Material outline input -->
      <div class="md-form md-outline form-lg">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        <label style="font-size:15px" for="name">Name</label>
      
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      
      <!-- Material outline input -->
      <div class="md-form md-outline form-lg">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        <label style="font-size:15px" for="email">Email</label>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      
      <!-- Material outline input -->
      <div class="md-form md-outline form-lg">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        <label style="font-size:15px" for="password">Password</label>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

         <!-- Material outline input -->
      <div class="md-form md-outline form-lg">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        <label style="font-size:15px" for="password-confirm">Confirm Password</label>
      </div>
      
      <button type="submit" class="btn btn-block btn-info btn-lg">Sign up</button>

    </div>
    <!--First column-->

  </div>
</form>
  <!--First row-->

</section>
<!-- Section -->

</div>
@endsection