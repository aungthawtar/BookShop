@extends('Backend/admin/layouts/master')
@section('title','Edit User')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-body">
                <form action="" method="post">
                @csrf
                    <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" value="{{$user->name}}" name="name" class="form-control" placeholder="Please Add User Name">
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" value="{{$user->email}}" name="email" class="form-control" placeholder="Please Add email">
                    </div>
                    <div class="form-group">
                        <label for="name">User Role</label>
                        <select name="status" id="status" class="form-control">
                            <option value="admin">Select Role</option>
                            <option value="" 
                                @if($user->status == "admin") selected @endif
                            >Admin</option>
                            <option value="user"
                                @if($user->status == "user") selected @endif
                            >User</option>
                        </select>
                    </div>
                    <div class="float-left">
                        <a href="{{url("admin/dashboard/user")}}" class="btn btn-primary">Back</a>
                    </div>
                    <div class="float-right">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection