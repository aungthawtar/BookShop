@extends('Backend/admin/layouts/master')
@section('title','Category')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('Backend/admin/messages/error')
            <div class="card card-body">
                <form action="" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$post->title}}">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="content" class="form-control" rows="10">{{$post->content}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Book Author</label>
                        <select name="author_id" class="form-control">
                            <option value="">Choice Author</option>
                            @foreach($authors as $author)
                                <option value="{{$author->id}}"
                                {{ $post->author_id == $author->id ? 'selected' : '' }}
                                >{{$author->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="category">Book Category</label>
                        <select name="category_id" class="form-control">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                {{ $post->category_id == $category->id ? 'selected' : ''}}
                                >{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Book Image</label>
                        <input type="file" class="form-control-file mb-2" name="image" vlaue="{{isset($post->image) ? asset('uploads/'.$post->image) : 'https://via.placeholder.com/150'}}">
                        <img src="{{asset('uploads/'.$post->image)}}" style="width:120px;" alt="">
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection