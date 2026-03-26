<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(6);
        return view('library.library', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('library.post', compact('post'));
    }
}
