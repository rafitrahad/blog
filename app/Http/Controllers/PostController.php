<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Validation\Rules\File;

class PostController extends Controller
{


    public function show_store()
    {

        return view('post');
    }

    public function showPost()
    {
        $posts = Post::all();

        return view('index', compact('posts'));
    }

    public function store(PostStoreRequest $request)
    {

        $path = $request->file('document')->store('posts', 'public');

        Post::create([
            'title' => $request->title,
            'summary' => $request->summary,
            'file_path' => $path,
            'description' => $validated['description']
        ]);

        return redirect()->route('show.post');
    }
}
