<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function index()
    {
        $data = Blog::all();
        return view('home',['data'=>$data]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $req)
    {
        $blog = new Blog;
        $blog->title = $req->title;
        $blog->body = $req->body;
        if($blog->save())
        {
            return redirect('home');
        }
        return abort(404);
    }
    public function edit($id)
    {
        $blog = Blog::find($id);
        if($blog)
        {
            return view('edit',['data'=>$blog]);
        }
        return abort(404);
    }
    public function update($id, Request $req)
    {
        $blog = Blog::find($id);
        $blog->title = $req->title;
        $blog->body = $req->body;
        if($blog->update())
        {
            return redirect('home');
        }
        return abort(404);
    }
    public function delete($id)
    {
        $blog = Blog::find($id);
        if($blog && $blog->delete())
        {
            return redirect('home');
        }
        return abort(404);
    }
    public function show()
    {
        $blog = Blog::all();
        return view('welcome',['data'=>$blog]);
    }
}
