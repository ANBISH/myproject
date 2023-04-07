<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function blog($id){
        $blogs = Blog::all();
        return view('blog', compact('blogs'));
    }
    public function index(){
        $blogs = Blog::all();
        return view('startbootstrap-clean-blog-gh-pages/index', compact('blogs'));
    }
}
