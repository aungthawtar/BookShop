@extends('FrontEnd.layouts.master')

@section('content')
@include('FrontEnd.layouts.nav')
<div class="hr mt-3 pt-5"></div>
<div class="container">
      <div class="card pt-3 mb-3">
            <div class="card-title">
                  <h2>{{$book->title}}</h2>
            </div>
            <div class="care-body">
                  <img src="{{url(asset('/uploads/'.$book->image))}}" alt="" class="img-fluid"> 
                  <p class="m-3">{{$book->content}}</p>
            </div>
      </div>
      <div class="container">
            @if (auth()->check())
            <form method="" action="{{url('/book/'. $book->id .'/comment')}}">
                  <div class="row">
                    <div class="col-9">
                      <input type="text" class="form-control" placeholder="Review..." name="comment">
                    </div>
                    <div class="col-2">
                      <input type="submit" class="form-control btn btn-info" value="Review">
                    </div>
                  </div>
            </form>
            @else
            <p>Do you Want to Review? Please <a href="{{url('userlogin')}}">Login</a> OR <a href="{{url('userregister')}}">Register</a></p>
            @endif

            
      </div>
      <div class="container">
            @foreach ($comments as $comment)
            <div class="card m-2">
                  <div class="card-title p-3 m-0">
                        <i>{{$comment->user->name}}</i>
                  </div>
                  <div class="card-body p-0 m-2">
                        <div class="alert alert-primary" role="alert">
                              {{$comment->comment}}
                        </div>
                  </div>
            </div>
            @endforeach
            
      </div>
      
</div>

@include('FrontEnd.layouts.footer')
@endsection

