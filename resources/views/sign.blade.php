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

@if(Session::has('succ'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
{{Session::get('succ')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
 
  
  @endif

  @if(Session::has('unsucc'))
<div class="alert alert-success" role="alert">
  {{Session::get('unsucc')}}
  </div>
  @endif


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
        <form method='post' enctype= multipart/form-data>
             <!-- Email input -->
             @csrf
          <div class="form-outline mb-4">
            <input type="text" name="name" id="form1Example13" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">Name</label>

            @if($errors -> has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
          </div>
          @endif

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" name="email" id="form1Example13" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">Email address</label>
          </div>
           <!-- Email input -->
           <div class="form-outline mb-4">
            <input type="phone" name="phone" id="form1Example13" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">Phone Number</label>
          </div>
          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Password</label>
          </div>

          <div class="form-outline mb-4">
            <input type="file" name="avtar" id="form1Example23" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">File</label>
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


        </form>
      </div>
    </div>
  </div>
</section>


@endsection