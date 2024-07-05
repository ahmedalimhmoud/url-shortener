<?php

declare(strict_types=1);

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\BaseRepositoryInterface;
use App\Repositories\UrlRepository;
use App\Repositories\UrlRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(UrlRepositoryInterface::class, UrlRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
    }
}
