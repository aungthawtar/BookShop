@extends('Backend/admin/layouts/master')
@section('title','Author')
@section('content')
<div class="container">
    <div class="row">
    ‌<a href="{{url("admin/dashboard/author/create")}}" class="btn btn-primary mb-3">Create</a>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Author Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($authors as $author)
                        <tr>
                            <td>{{$author->id}}</td>
                            <td>{{$author->name}}</td>
                            <td>
                                <a href="{{url("admin/dashboard/author/$author->id/edit")}}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{url("admin/dashboard/author/$author->id/delete")}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?');" >Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection