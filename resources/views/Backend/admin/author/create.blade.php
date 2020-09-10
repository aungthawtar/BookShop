@extends('Backend/admin/layouts/master')
@section('title','Author')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-body">
                <form action="" method="post">
                @csrf
                    <div class="form-group">
                        <label for="name">Author Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Please Add Author Name">
                    </div>
                    <div class="float-left">
                        <a href="{{url("admin/dashboard/author")}}" class="btn btn-primary">Back</a>
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