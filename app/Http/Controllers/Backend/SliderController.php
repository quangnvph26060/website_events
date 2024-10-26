<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ConfigSlider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Danh sách slider';
        $sliders = ConfigSlider::all();
        return view('backend.slider.index', compact('title', 'sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Thêm slider';
        return view('backend.slider.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $criteria =  $request->validate([
            'title' => 'required|string|max:255',
            'path_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'short_content' => 'required|min:10',
        ],   __('request.messages'), [
            'title' => 'Tiêu đề',
            'path_image' => 'Hình ảnh',
            'short_content' => 'Mô tả ngắn'
        ]);
        $criteria['path_image'] = saveImages($request, 'path_image', 'sliders', 1920, 1080);
        ConfigSlider::create($criteria);
        session()->flash('success', 'Slider đã được thêm thành công!');
        return redirect()->route('admin.slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Cập nhật slider';
        $slider = ConfigSlider::find($id);
        return view('backend.slider.edit', compact('title', 'slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated =  $request->validate([
            'title' => 'required|string|max:255',
            'path_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'short_content' => 'required|min:10',
        ],   __('request.messages'), [
            'title' => 'Tiêu đề',
            'path_image' => 'Hình ảnh',
            'short_content' => 'Mô tả ngắn'
        ]);

        $slider = ConfigSlider::find($id);
        if ($request->hasFile('path_image')) {
            deleteImage($slider->path_image);
            $validated['path_image'] = saveImages($request, 'path_image', 'sliders', 1920, 1080);
        }

        $slider->update($validated);
        session()->flash('success', 'Cập nhật slider thành công!');
        return redirect()->route('admin.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = ConfigSlider::find($id);
        deleteImage($slider->path_image);
        $slider->delete();
        session()->flash('success', 'Xóa thành công!');
        return redirect()->back();
    }
}
