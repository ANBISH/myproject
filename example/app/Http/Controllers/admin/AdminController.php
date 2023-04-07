<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use http\Env\Request;

class AdminController extends Controller
{

    public function index(){
        $blogs = Blog::all();
        return view('admin/index', compact('blogs'));
    }
    public function create(){
        $blogs = Blog::all();
        return view('admin/create', compact('blogs'));
    }
    public function storer(Request $request): \Illuminate\Http\RedirectResponse
    {
        Blog::created($request->only(['title','category','tag','description','image']));
        return redirect()->route('index.index')->with('info', 'Ви успішно добавили запис');
    }
}
