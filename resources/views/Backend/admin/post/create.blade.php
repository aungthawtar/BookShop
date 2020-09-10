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
                        <label for="title">Book Title</label>
                        <input type="text" class="form-control" value="{{old('title')}}" name="title" placeholder="Please Add Book Title">
                    </div>
                    <div class="form-group">
                        <label for="content">Book Content</label>
                        <textarea name="content" id="content" placeholder="Please Add Book Content ..." class="form-control" rows="10">{{old('content')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content">Book Author</label>
                        <select name="author_id" class="form-control">
                            <option value="">Choice Author</option>
                            @foreach($authors as $author)
                                <option value="{{$author->id}}">{{$author->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="category">Book Category</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Book Image</label>
                        <input type="file" class="form-control-file" name="image">
                    </div>
                    <a href="{{url("admin/dashboard/post")}}" class="btn btn-info">Back</a>
                    <button class="btn btn-primary float-right" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection