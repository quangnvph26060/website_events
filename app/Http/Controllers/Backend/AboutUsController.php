<?php

namespace App\Http\Controllers\Backend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Events\TranslateContent;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function index()
    {
        $title = 'Danh sách show về chúng tôi';
        $aboutUs = About::all();
        return view('backend.about.index', compact('title', 'aboutUs'));
    }
    public function create()
    {
        $title = 'Thêm show về chúng tôi';
        return view('backend.about.create', compact('title'));
    }
    public function store(Request $request)
    {
        $criteria =  $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|array',
            'content.*' => 'string',
        ],   __('request.messages'), [
            'title' => 'Tiêu đề',
            'image' => 'Hình ảnh'
        ]);

        $criteria['image'] = saveImages($request, 'image', 'about', 2560, 1600);

        $about = About::create($criteria);

        event(new TranslateContent('abouts', $about->id, ['title', 'content'], 'en'));


        session()->flash('success', 'Giới thiệu về chúng tôi đã được thêm thành công!');

        return redirect()->route('admin.about.index');
    }
    public function edit($id)
    {
        $title = 'Cập nhật show về chúng tôi';
        $about = About::find($id);
        return view('backend.about.edit', compact('title', 'about'));
    }
    public function update($id, Request $request)
    {
        $validated =  $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|array',
            'content.*' => 'string',
        ],   __('request.messages'), [
            'title' => 'Tiêu đề',
            'image' => 'Hình ảnh'
        ]);

        $about = About::find($id);
        if ($request->hasFile('image')) {
            deleteImage($about->image);
            $validated['image'] = saveImages($request, 'image', 'about', 2560, 1600);
        }

        $about->update($validated);

        event(new TranslateContent('abouts', $about->id, ['title', 'content'], 'en'));

        session()->flash('success', 'Cập nhật về chúng tôi đã được thêm thành công!');
        
        return redirect()->route('admin.about.index');
    }
    public function destroy($id)
    {
        $about = About::find($id);
        deleteImage($about->image);
        $about->delete();
        session()->flash('success', 'Xóa thành công!');
        return redirect()->back();
    }
}
