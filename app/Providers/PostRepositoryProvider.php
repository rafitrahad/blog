<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Repository\Interfaces\PostRepositoryInterface;
use App\Repository\PostRepository;

class PostRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
