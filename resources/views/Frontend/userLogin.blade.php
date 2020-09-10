@extends('FrontEnd.layouts.master')
@section('title','login')
@section('content')
<div class="container">

    <div class="section-title mt-5">
      <h2>Login Form</h2>
    </div>

    <div class="row justify-content-center">

      <div class="card col-lg-5 col-md-12 p-3" data-aos-delay="300" style="border-radius: 25px;">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group mt-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" style="border-radius: 25px; height: 50px;"/>
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" style="border-radius: 25px; height: 50px;"/>
            <div class="validate"></div>
          </div>
          <div class="row ml-2">
            <a class="btn btn-outline-secondary mr-2" style="border-radius: 25px; width: 90px;"  href="{{url('/')}}">Back</a>
            <input type="submit" class="btn btn-info" value="Login" style="border-radius: 25px; width: 90px;">
            <p class="text-center mt-3">If You Don't Have Account, Please <a href="{{url('userregister')}}"> Register</a>.</p>
          </div>
        </form>
      </div>

    </div>

  </div>
@endsection