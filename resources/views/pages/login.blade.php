@extends('layouts.app')

@section('title','Sign In')

@section('content')

<div class="container">
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <h1 class="login-header text-info">Login</h1>
            <p class="grey-text ml-2">After login, the login authentication will now run</p>
        </div>

        <div class="col-md-6">
            <p class="grey-text">
                Please fill out the missing fields
            </p>
            <div class="md-form md-outline form-lg">
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <label style="font-size:15px" for="email">Email</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="md-form md-outline form-lg">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <label style="font-size:15px" for="password">Password</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <small class="grey-text ml-1">please make sure that the username and password you entered are correct</small>
                <div>
                @if (Route::has('password.request'))
                    <a style="margin-left:-6%;text-transform:none" class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif
                    <button type="submit" class="btn btn-block btn-info btn-lg mt-2">Sign In</button>
                </div>
            </div>

        </div>
       
    </div>
    </form>
</div>

@endsection('content')