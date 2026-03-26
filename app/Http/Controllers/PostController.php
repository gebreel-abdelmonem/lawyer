<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // validation
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // insert in DB
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'تم الإضافة بنجاح');
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index');
    }
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index');
    }
}
