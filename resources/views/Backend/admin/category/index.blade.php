@extends('Backend/admin/layouts/master')
@section('title','Categroy')
@section('content')
<div class="container">
    <div class="row">
    ‌<a href="{{url("admin/dashboard/category/create")}}" class="btn btn-primary mb-3">Create</a>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->category_name}}</td>
                            <td>
                                <a href="{{url("admin/dashboard/category/$category->id/edit")}}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{url("admin/dashboard/category/$category->id/delete")}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection