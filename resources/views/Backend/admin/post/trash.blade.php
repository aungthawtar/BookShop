@extends('Backend/admin/layouts/master')
@section('title','Drift')
@section('content')
<div class="container">
<a href="{{url("admin/dashboard/post")}}" class="btn btn-primary mb-3">Back</a>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        @foreach($categories as $category)
                        <td>{{$category->category_name}}</td>
                        @endforeach
                        <td>
                            <a href="{{url("admin/dashboard/post/$post->id/restore")}}" class="btn btn-info btn-sm">Restore</a>
                            <a href="{{url("admin/dashboard/post/trash/$post->id/delete")}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection