<?php

namespace App\Http\Controllers\Backend;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Events\TranslateContent;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Danh sách bài viết';
        $posts = Post::latest()->get();
        return view('backend.posts.index', compact('title', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Thêm bài viết';
        $tags = Tag::latest()->get();
        return view('backend.posts.create', compact('title', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $criteria = $request->validate(
            [
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'excerpt' => 'nullable|string',
                'meta_description' => 'nullable|string',
                'meta_keywords' => 'nullable|string',
                'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'is_published' => 'required|boolean',
                'tags' => 'nullable|array',
            ],
            __('request.messages'),
            [
                'tags' => 'Thẻ',
                'title' => 'Tiêu đề',
                'content' => 'Nội dung',
                'excerpt' => 'Tóm tắt',
                'meta_description' => 'Mô tả',
                'meta_keywords' => 'Từ khoá',
                'featured_image' => 'Hình ảnh',
            ]
        );

        $criteria['featured_image'] = saveImages($request, 'featured_image', 'posts', 1200, 580);

        $post = Post::create($criteria);

        $fields = ['title', 'content', 'excerpt', 'meta_description', 'meta_keywords'];

        event(new TranslateContent('posts', $post->id, $fields, 'en'));


        $post->tags()->sync($request->tags);

        session()->flash('success', 'Bài viết đã được thêm thành công!');

        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $title = 'Cập nhật bài viết';
        $tags = Tag::latest()->get();

        $oldTags = $post->tags->pluck('id')->toArray();

        return view('backend.posts.edit', compact('post', 'title', 'tags', 'oldTags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate(
            [
                'title' => 'required|string|max:255|unique:posts,title,' . $post->id,
                'content' => 'required|string',
                'excerpt' => 'nullable|string',
                'meta_description' => 'nullable|string',
                'meta_keywords' => 'nullable|string',
                'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'is_published' => 'required|boolean',
                'tags' => 'nullable|array',
            ],
            __('request.messages'),
            [
                'tags' => 'Thẻ',
                'title' => 'Tiêu đề',
                'content' => 'Nội dung',
                'excerpt' => 'Tóm tắt',
                'meta_description' => 'Mô tả',
                'meta_keywords' => 'Từ khoá',
                'featured_image' => 'Hình ảnh',
            ]
        );


        if ($request->hasFile('featured_image')) {
            deleteImage($post->featured_image);
            $validated['featured_image'] = saveImages($request, 'featured_image', 'posts', 1200, 580);
        }

        $post->update($validated);

        $fields = ['title', 'content', 'excerpt', 'meta_description', 'meta_keywords'];

        event(new TranslateContent('posts', $post->id, $fields, 'en'));

        $post->tags()->sync($request->tags);

        session()->flash('success', 'Bài viết đã được cập nhật thành công!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        deleteImage($post->featured_image);
        $post->tags()->detach();
        $post->delete();
        session()->flash('success', 'Bài viết đã được xóa thành công!');
        return redirect()->back();
    }
}
