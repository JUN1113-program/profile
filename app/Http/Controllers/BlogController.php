<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();

        return view("blog/index", compact("blogs"));
    }

    public function create(){
        $blog = new Blog();
        $submit = "新規登録";
        $action = "/blog";
        return view("blog/create",compact("blog", "submit", "action"));
    }

    public function store(Request $request){
        $blog = [   "content" => $request->content,
                    "title" => $request->title,
                    "user_id" => Auth::user()->id];
        Blog::create($blog);

        return redirect("/home");
    }

    public function show($id){
        $blog = Blog::find($id);

        return view("blog/show", compact("blog"));
    }
}
