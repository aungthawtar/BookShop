@extends('Backend/admin/layouts/master')
@section('title','Post Show')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{$post->title}}</div>
                <div class="card-body">
                <img src="{{isset($post->image) ? asset('uploads/'.$post->image) : 'https://via.placeholder.com/150'}}"  class="rounded mx-auto d-block" style="width:500px; height:550px;">
                <br>
                <div class="well">
                    {{$post->content}}
                    <div class="border p-3 mt-3">
                        <span>Author Name - </span>
                        <a href="">{{$post->author->name}}</a>
                        <br>
                        <span>Category Name - </span>
                        <a href="">{{$post->category->category_name}}</a>
                    </div>
                </div>
                </div>
                <div class="card-footer">
                    <div class="float-left">
                        <a href="{{url("admin/dashboard/post")}}" class="btn btn-info">Back</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection