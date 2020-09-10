@extends('Backend/admin/layouts/master')
@section('title','Create User')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-body">
                <form action="" method="post">
                @csrf
                    <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Please Add User Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Please Add email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Please Add password">
                    </div>
                    <div class="form-group">
                        <label for="status">User Role</label>
                        <select name="status" id="status" class="form-control">
                            <option>Select Role</option>
                            <option>admin</option>
                            <option>user</option>
                        </select>
                    </div>

                    <div class="float-left">
                        <a href="{{url("admin/dashboard/user")}}" class="btn btn-primary">Back</a>
                    </div>
                    <div class="float-right">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection