@extends('Backend/admin/layouts/master')
@section('title','Post')
@section('content')
<div class="container">
    <div class="mb-3">
        <a href="{{url("admin/dashboard/post/create")}}" class="btn btn-primary"><i class="fas fa-plus-circle" style="color:#b7b7b7;"></i> Create</a>
        <a href="{{url("admin/dashboard/post/trash")}}" class="btn btn-outline-secondary float-right"><i class="far fa-trash-alt" style="color:#b7b7b7;"></i> View Trash</a>
    </div>
    @include('Backend/admin/messages/success')
    <div class="row justify-content-center">
        @foreach($posts as $post)
        <div class="col-md-4">
            <div class="card text-dark mb-3">
                <div class="card-header bg-primary text-center">{{$post->title}}</div>
                <div class="card-body">
                <img src="{{ isset($post->image) ? asset('uploads/'.$post->image) : 'https://via.placeholder.com/150' }}" class="rounded mx-auto d-block" style="width:310px; height:350px;" alt="image">
                <br>
                <div class="well">
                    {{substr($post->content,0,100)}}
                </div>
                <div class="mt-3 border p-2">
                    <span>Author Name - </span>
                    <a href="#">{{$post->author->name}}</a>
                    <br>
                    <span>Category Name - </span>
                    <a href="#">{{$post->category->category_name}}</a>
                </div>
                </div>
                <div class="card-footer">
                    <div class="float-right">
                        <a href="{{url("admin/dashboard/post/$post->id")}}" class="btn btn-info">View</a>
                    </div>
                    <div class="float-left">
                        <a href="{{url("admin/dashboard/post/$post->id/edit")}}" class="btn btn-primary">Edit</a>
                        <a href="{{url("admin/dashboard/post/$post->id/delete")}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this post?');">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}
    </div>
</div>
@endsection