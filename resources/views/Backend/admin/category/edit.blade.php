@extends('Backend/admin/layouts/master')
@section('title','Categroy')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-body">
                <form action="" method="post">
                @csrf
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" value="{{$category->category_name}}" name="category_name" class="form-control" placeholder="Please Add Author Name">
                    </div>
                    <div class="float-left">
                        <a href="{{url("admin/dashboard/category")}}" class="btn btn-primary">Back</a>
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