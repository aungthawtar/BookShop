@extends('Backend/admin/layouts/master')
@section('title','User')
@section('content')
<div class="container">
    <div class="row">
    ‌<a href="{{url("admin/dashboard/user/create")}}" class="btn btn-primary mb-3">Create</a>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->status}}</td>
                            <td>
                                <a href="{{url("admin/dashboard/user/$user->id/edit")}}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{url("admin/dashboard/user/$user->id/delete")}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete?');" >Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection