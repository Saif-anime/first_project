@extends('layout')
@section('title', 'hompeage')
@section('content')
<style>
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}

</style>
@if(Session::has('exit'))
<div class="alert alert-success" role="alert">
  {{Session::get('exit')}}
  </div>
  @endif
<section class="vh-100">
  <div class="container py-5">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form method="post">
           @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form1Example13" name="email" class="form-control form-control-lg" />
            <label class="form-label"  for="form1Example13">Email address</label>
            @if($errors -> has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
          </div>
          @endif
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" name="password" id="form1Example23"  class="form-control form-control-lg" />
            <label class="form-label"  for="form1Example23">Password</label>
            @if($errors -> has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
          </div>
          @endif
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>

          <!-- Submit button -->
          <button type="submit"  class="btn btn-primary btn-lg btn-block w-100">Sign in</button>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
          </div>

          <a href="{{url('login/google')}}" class="btn btn-primary btn-lg btn-block w-100 my-3" style="background-color: #3b5998" href="#!"
            role="button">
            <i class="fab fa-facebook-f me-2"></i>Continue with Google
          </a>
          <a   href="{{url('login/facebook')}}" class="btn btn-primary btn-lg btn-block w-100 " style="background-color: #55acee" href="#!"
            role="button" >
            <i class="fab fa-twitter me-2"></i>Continue with Facebook
          
          
          
          </a>

        </form>

        
      </div>
    </div>
  </div>
</section>


@endsection