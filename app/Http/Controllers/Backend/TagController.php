<?php

namespace App\Http\Controllers\Backend;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $title = 'Danh sách thẻ';

        // return view('backend.tags.index', compact('title', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Thêm thẻ mới';
        $tags = Tag::latest()->get();
        return view('backend.tags.create', compact('title', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $criteria = $request->validate(
            [
                'name' => 'required|unique:tags|string|max:255',
            ],
            __('request.messages'),
            [
                'name' => 'Tên thẻ',
            ]
        );

        Tag::create($criteria);

        session()->flash('success', 'Thẻ đã được thêm thành công!');

        return redirect()->route('admin.tags.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        $title = 'Cập nhật thẻ';
        $tags = Tag::latest()->get();
        return view('backend.tags.edit', compact('tag', 'title', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $criteria = $request->validate(
            [
                'name' => 'required|string|max:255|unique:tags,name,' . $tag->id,
            ],
            __('request.messages'),
            [
                'name' => 'Tên thẻ',
            ]
        );

        $tag->update($criteria);

        session()->flash('success', 'Thẻ đã được cập nhật thành công!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->posts()->detach();
        $tag->delete();
        session()->flash('success', 'Thẻ đã được xóa thành công!');
        return redirect()->back();
    }
}
