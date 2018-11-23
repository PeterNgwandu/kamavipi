@extends('authentication.main')

@section('content')

<div class="account-wrap">

    <!-- <a class="site-logo" href="/">
      <img src="{{url('images/template/kamavipi3.png')}}" alt="Site Logo">
    </a> -->

    <!-- <form method="POST" action="/register" class="accountform signupform">
        @csrf
        <h3>{{ __('Sign up') }}, it's free..</h3>
        <div class="basic-field">
            <label>Username <br/>
                <p>
                    <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
                </p>
            </label>
            <label>E-mail address <br/>
                <p>
                    <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                </p>
            </label>
            <div class="row">
              <div class="col-sm-6">
                <label>Password <br/>
                    <p>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                    </p>
                </label>
              </div>
              <div class="col-sm-6">
                <label>Retype Password<br/>
                    <p>
                        <input type="password" id="password_confirmation" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                    </p>
                </label>
              </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label>First Name <br/>
                        <p>
                            <input type="text" class="form-control" placeholder="Enter First Name" name="fname" required>
                        </p>
                    </label>
                </div>
                <div class="col-sm-6">
                    <label>Last Name <br/>
                        <p>
                            <input type="text" class="form-control" placeholder="Enter Last Name" name="lname" required>
                        </p>
                    </label>
                </div>
            </div>
            @include('layout/partials.errors')
        </div>
        <button type="submit">Register</button>
        <p class="signup-recover">Do you already have an account? <a href="/login">Login here</a></p>
    </form> -->

    <form class="accountform" action="/register" method="POST" id="registerForm">
      @csrf
      <h3>{{ __('Sign Up') }} It's free</h3>
      <nav>
        <ul class="nav nav-tabs" id="nav-tab" role="tablist">
          <li class="active"><a class="nav-item nav-link active text-warning" id="nav-phone-tab" data-toggle="tab" href="#nav-phone" role="tab" aria-controls="nav-phone" aria-selected="true"><i class="glyphicon glyphicon-phone"></i>&nbsp;Phone</a></li>
          <li><a class="nav-item nav-link text-warning" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="glyphicon glyphicon-user text-danger"></i>&nbsp;Profile</a></li>
          <li><a class="nav-item nav-link text-warning" id="nav-verification-tab" data-toggle="tab" href="#nav-verification" role="tab" aria-controls="nav-verification" aria-selected="false"><i class="glyphicon glyphicon-ok text-success"></i>&nbsp;Verification</a></li>
        </ul>
      </nav>
      <div class="tab-content" id="nav-tabContent" style="margin-top:10px;">
        <div class="tab-pane current active in fade" id="nav-phone" role="tabpanel" aria-labelledby="nav-phone-tab">
            <div class="form-group">
                <label for="country">Country</label>
                <select class="form-control" name="country">
                    <option value="Tanzania">Tanzania</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Uganda">Uganda</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="number" id="" name="phone" class="form-control" placeholder="Enter Phone Number" value="">
            </div>
            <div class="text-center">
                <a style="color:#ffffff;" id="next" class="mybtn mybtn-purple continue text-white">Next</a>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="row">
                <div class="col col-md-6">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="First Name" value="">
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="Last Name" value="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" value="">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Password Confirmation</label>
                <input type="password" class="form-control" placeholder="Retype Password" name="password_confirmation" value="">
            </div>
            <div class="text-center">
                <a style="color:#ffffff;" id="back" class="mybtn mybtn-purple back text-white">Back</a>
                <a style="color:#ffffff;" id="next" class="mybtn mybtn-purple continue text-white">Next</a>
            </div>

        </div>
        <div class="tab-pane fade" id="nav-verification" role="tabpanel" aria-labelledby="nav-verification-tab">
            <p class="text-info">Wait for the SMS to arrive, It can take up to 15 minutes</p>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Verification Code" name="verification_code" value="">
            </div>
            <div class="text-center">
                <a style="color:#ffffff;" class="mybtn mybtn-purple back text-white">Back</a>
                <button type="submit" id="registerBtn" class="btn mybtn-purple  btn-style text-white">Register</button>
            </div>

            <div class="text-center" style="margin-top:20px;">
                <a href="/login" style="color:#8E44AD">Login Here</a>
            </div>
        </div>
      </div>

    </form>

</div>

@endsection
