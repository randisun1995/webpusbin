<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('berita\posts', [
            "title" => "Blog",
            "posts" => Post::all()
        ]);
    }


    public function show(Post $post)
    {
        return view('berita\post', [
            "title" => "Single post",
            "post" => $post

        ]);
    }

    public function index1()
    {
        return view('portal.index', [
            "posts" => Post::all()
        ]);
    }


}
