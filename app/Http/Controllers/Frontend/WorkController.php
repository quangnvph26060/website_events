<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ConfigBanner;

class WorkController extends Controller
{
    public function works($slug = null)
    {
        $banner = ConfigBanner::where('page_name', 3)->first();
        if ($slug) {
            $post = Post::isPublished()->where('slug', $slug)->first();
            if ($post) {
                return view('frontend.pages.posts', compact('post'));
            }
        }

        $posts = Post::isPublished()->latest('id')->paginate(6);

        return view('frontend.pages.work', compact('posts', 'banner'));
    }

    public function worksTag($slug)
    {
        $tag = Tag::where('slug', $slug)->first();

        if ($tag) {
            $posts = $tag->posts()->isPublished()->latest('id')->paginate(6);
            return view('frontend.pages.work', compact('posts', 'tag'));
        }
    }
}
