<?php

namespace App\Services;

use App\Repository\Interfaces\PostRepositoryInterface;
use App\Services\Interfaces\PostInterface;
use App\Models\Post;
use Override;

class PostService implements PostInterface
{
    /**
     * Create a new class instance.
     */

    protected $data;

    public function __construct(PostRepositoryInterface $data)
    {
        $this->data = $data;        //
    }

    public function store($data)
    {
        $this->data->store($data);
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
