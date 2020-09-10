<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\category;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\author;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::when(request('search'),function($posts){
            return $posts->where('title','like','%' . request('search') . '%');
        })->orderBy('id','desc')->paginate(6);
        return view('Backend/admin/post/index',compact('posts'));
    }

    public function create()
    {
        $authors = author::all();
        $categories = category::all();
        return view('Backend/admin/post/create',compact('categories','authors'));
    }

    public function store(PostRequest $request)
    {
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $request->file('image')->storeAs('uploads',$imageName);
         
            Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'author_id' => $request->author_id,
                'category_id' => $request->category_id,
                'image' => $imageName,
                ]);
        }else{
            Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'author_id' => $request->author_id,
                'category_id' => $request->category_id,
                ]);
        }
        return redirect('admin/dashboard/post')->with('success','Successfully Create Post!');
    }

    public function show($id)
    {
        $post = Post::find($id);
        
        return view('Backend/admin/post/show',compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = category::all();
        $authors = author::all();
        return view('Backend/admin/post/update',compact('post','categories','authors'));
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        if($request->hasFile('image')){
            $imageName = $post->image;
            File::delete('uploads/'.$imageName);
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $request->file('image')->storeAs('uploads',$imageName);
            $post->update([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $imageName,
                'author_id' => $request->author_id,
                'category_id' => $request->category_id,
            ]);
        }else{
            $post = Post::find($id);
            $post->title = $request->title;
            $post->content = $request->content;
            $post->author_id = $request->author_id;
            $post->category_id = $request->category_id;
            $post->save();
        }
        return redirect('admin/dashboard/post')->with('success','Successfully Update Post!');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('admin/dashboard/post')->with('success','Successfully Delete Post!');
    }

    public function trash(){
        $categories = category::all();
        $posts = Post::onlyTrashed()->get();
        return view('Backend/admin/post/trash',compact('posts','categories'));
    }

    public function restore($id){
        Post::withTrashed()->find($id)->restore();
        return redirect('admin/dashboard/post');
    }

    public function fdelete($id){
        $post = Post::withTrashed()->find($id);
        Storage::delete('uploads/'.$post->image);
        $post->forceDelete();
        return redirect('admin/dashboard/post');
    }
}
