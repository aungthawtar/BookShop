@extends('Backend/admin/layouts/master')
@section('title','Post')
@section('content')
<div class="container">
    @include('Backend/admin/messages/success')
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Book Name</th>
                        <th>Book Comment</th>
                        <th>Comment User</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($comments as $comment)
                        <tr>
                              <td>{{$comment->id}}</td>
                              <td>
                                    @if ($comment->post)
                                    {{$comment->post->title}}                                        
                                    @endif
                              </td>
                              <td>{{$comment->comment}}</td>
                              <td>
                                    {{$comment->user->name}}
                              </td>
                              <td>
                                    @if ($comment->deleted_at == null)
                                    <a href="{{url("admin/dashboard/comment/$comment->id/hide")}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to Hide?');">Hide</a>
                                    @else
                                    <a href="{{url("admin/dashboard/comment/$comment->id/show")}}" class="btn btn-info btn-sm" onclick="return confirm('Are you sure to Show?');" >Show</a>
                                    @endif
                              </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$comments->links()}}
    </div>
</div>
@endsection