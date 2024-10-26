<?php

namespace App\Providers;

use App\Models\Config;
use App\Models\Tag;
use App\Models\Work;
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
        View::composer('frontend/include/sidebar', function ($view) {
            $tags = Tag::latest('id')->get();
            $works = Work::latest('id')->with('images')->limit(9)->get();
            $view->with([
                'tags' => $tags,
                'works' => $works
            ]);
        });
        $configWebsite = Config::first();
        View::composer('*', function ($view) use ($configWebsite) {
            $view->with([
                'configWebsite' => $configWebsite
            ]);
        });
    }
}
