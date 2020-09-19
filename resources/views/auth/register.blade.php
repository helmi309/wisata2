@extends('admin/login')
@section('judul_halaman', 'Register')
@section('content')
<p class="login-box-msg">Register a new membership</p>
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="input-group mb-3">
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>                          
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-user"></span>
        </div>
      </div>
      @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="input-group mb-3">
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-envelope"></span>
        </div>
      </div>
      @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="input-group mb-3">
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
      @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="input-group mb-3">
      <input id="password-confirm" type="password" class="form-control" placeholder="Password Confirm"  name="password_confirmation" required autocomplete="new-password">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- /.col -->
      <div class="col-4">
        <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>

      </div>
      <!-- /.col -->
    </div>
</form>
@endsection
