@extends('authentication.main')

@section('content')
<div class="account-wrap">

  <!-- <a class="site-logo" href="/">
    <img src="{{url('images/template/kamavipi3.png')}}" alt="Site Logo">
  </a> -->

  <form method="POST" action="/login" class="accountform" id="loginForm">
      @csrf
      <h3>{{ __('Login') }}</h3>
      <div class="basic-field">
          <label>Phone Number <br/>
              <p>
                  <input type="number" class="form-control" placeholder="Enter Phone Number" name="phone" required>
              </p>
          </label>
          <label>Password <br/>
              <p>
                  <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
              </p>
          </label>
          @include('layout/partials.errors')
      </div>
      <label class="stay-login">
          <input type="checkbox" name="stay-login"> Stay logged in
      </label>
      <button type="submit" id="loginBtn" class="btn btn-warning">Login</button>
      <hr>
      <p class="signup-recover" style="color:#8E44AD;">Don't you have an account yet? <a href="/register" class="text-success">Sign up here</a><br/><a href="#" style="color:#8E44AD;">I forgot my password</a></p>
  </form>
</div>

@endsection
