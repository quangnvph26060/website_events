<?php

namespace App\Providers;

use App\Models\Config;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Work;
use App\Models\ConfigHome;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['frontend/include/sidebar', 'frontend/layouts/partials/footer'], function ($view) {
            $tags = Tag::latest('id')->get();
            $works = Work::latest('id')->with('images')->limit(9)->get();
            $view->with([
                'tags' => $tags,
                'works' => $works
            ]);
        });

        View::composer('frontend/layouts/partials/footer', function ($view) {
            $postF = Post::isPublished()->latest('id')->limit(3)->get();

            $view->with('postF', $postF);
        });
        $configWebsite = Config::first();
        View::composer('*', function ($view) use ($configWebsite) {
            $view->with([
                'configWebsite' => $configWebsite
            ]);
        });
    }
}
