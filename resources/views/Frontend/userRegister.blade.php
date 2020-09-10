@extends('FrontEnd.layouts.master')
@section('title','Register')
@section('content')
<div class="container">

    <div class="section-title mt-5">
      <h2>Register Form</h2>
    </div>

    <div class="row justify-content-center">

      <div class="card col-lg-5 col-md-12 p-3" data-aos-delay="300" style="border-radius: 25px;">
      <form method="POST" action="{{ route('register') }}">
        @csrf
          <div class="form-group mt-3">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" style="border-radius: 25px; height: 50px; "/>
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  style="border-radius: 25px; height: 50px;"/>
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password"  style="border-radius: 25px; height: 50px; "/>
            <div class="validate"></div>
          </div>
          <div class="form-group row">
              <div class="col-md-12">
              <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password"  style="border-radius: 25px; height: 50px;">
            </div>
        </div>
          <a class="btn btn-outline-secondary" href="{{url('/')}}"  style="border-radius: 25px; width: 90px;">Back</a>
          <input type="submit" class="btn btn-info " value="Register"  style="border-radius: 25px; width: 90px;">
          <p class="text-center mt-3">If You Have Account, Please <a href="{{url('userlogin')}}"> Login</a>.</p>
        </form>
      </div>

    </div>

  </div>
@endsection