<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    public function works($slug = null)
    {
        if ($slug) {
            $post = Post::isPublished()->where('slug', $slug)->first();
            if ($post) {
                return view('frontend.pages.posts', compact('post'));
            }
        }

        $posts = Post::isPublished()->latest('id')->paginate(6);

        return view('frontend.pages.work', compact('posts'));
    }
}
