@extends('FrontEnd.layouts.master')

@section('content')
@include('FrontEnd.layouts.nav')

@include('FrontEnd.layouts.hero')


<div class="container">
<h2 class="m-3 text-info font-weight-bold">{{strtoupper($category->category_name)}}</h2>
<hr>
      <div class="row">
            @foreach ($posts as $book)
            <div class="col-3">
                  <div class="card p-1 m-1">
                        <div class="card-title">
                              <h5 class="text-center mt-2">{{$book->title}}</h5>
                        </div>
                        <div class="card-body">
                              @if ($book->image)
                              <img src="{{url(asset('/uploads/'.$book->image))}}" alt="" class="w-100"> 
                              @else
                              <img src="{{url(asset('assets/img/more-services-1.jpg'))}}" alt="" class="w-100">                   
                              @endif
                              <p class="m-3">{{substr($book->content,0,20)}}</p>
                        </div>
                        <div class="card-footer">
                        <a href="{{url('book/'.$book->id.'/view')}}">See More</a>
                        </div>
                  </div> 
            </div>
            @endforeach
      </div>        
</div>

@include('FrontEnd.layouts.footer')
@endsection

