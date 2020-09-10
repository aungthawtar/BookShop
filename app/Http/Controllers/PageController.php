<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\category;
use App\comment;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Post::limit(8)->get();
        $categories = category::all();
        return view('FrontEnd/home',compact('books','categories'));
    }

    public function login()
    {
        return view('FrontEnd/userLogin');
    }

    public function register()
    {
        return view('FrontEnd/userRegister');
    }
    public function create(Request $request, $id)
    {
        $comment = new comment;
        $comment->comment = $request->comment;
        $comment->post_id = $id;
        $comment->user_id = auth()->user()->id;
        $comment->save();
        return redirect(url('/book/'.$id.'/view'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Post::findOrfail($id);
        $comments = comment::where('post_id',$id)->orderBy('id', 'DESC')->get();
        return view('Frontend/layouts/show',compact('book','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function category($id)
    {
        $posts = post::where('category_id',$id)->get();
        $category = category::find($id);
        return view('Frontend/category',compact('posts','category'));
    }
}
