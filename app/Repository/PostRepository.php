<?php

namespace App\Repository;

use App\Repository\Interfaces\PostRepositoryInterface;
use App\Models\Post;
use Override;

class PostRepository implements PostRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function store($data)
    {
        // dd($data->document);
        $path = $data->file('document')->store('posts', 'public');

        Post::create([
            'title' => $data->title,
            'summary' => $data->summary,
            'file_path' => $path,
            'description' => $data->description
        ]);
    }

    // public function store(array $data)
    // {

    //     $path = $data['document']->store('posts', 'public');

    //     Post::create([
    //         'title' => $data['title'],
    //         'summary' => $data['summary'],
    //         'file_path' => $path,
    //         'description' => $data['description']
    //     ]);
    // }




    // public function showPost()
    // {
    //     $posts = Post::all();

    //     return redirect()->route('show.home');
    // }
}
