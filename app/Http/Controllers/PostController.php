<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Validation\Rules\File;
use App\Services\Interfaces\PostInterface;

class PostController extends Controller
{
    public $post;
    public function __construct(PostInterface $post)
    {
        $this->post = $post;
    }

    public function show_store()
    {
        return view('post');
    }

    public function showPost()
    {
        $posts = Post::all();

        return redirect()->route('show.home');
    }

    public function store(PostStoreRequest $request)
    {
        $this->post->store($request);

        return redirect()->route('show.home');
    }
}
