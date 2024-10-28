<?php

namespace App\Http\Controllers\Backend\Config;

use App\Http\Controllers\Controller;
use App\Models\ConfigBanner;
use Illuminate\Http\Request;

class ConfigBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Danh sách banner';
        $banners = ConfigBanner::all();
        return view('backend.config.banner.index', compact('title', 'banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Thêm page cấu hình banner';

        return view('backend.config.banner.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $criteria =  $request->validate([
            'page_name' => 'required|min:1',
            'title' => 'nullable|string|max:255',
            'path_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable',
        ],   __('request.messages'), [
            'path_image' => 'Hình ảnh',
            'page_name' => 'Tên trang',
        ]);
        $pageNameExits = $request->page_name;
        $criteria['path_image'] = saveImages($request, 'path_image', 'banners', 2500, 1143);
        $banner = ConfigBanner::where('page_name', $pageNameExits)->first();
        if ($banner) {
            $banner->update($criteria);
        }
        ConfigBanner::create($criteria);
        session()->flash('success', 'Banner page đã được thêm thành công!');
        return redirect()->route('admin.config.banner.index');
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
        $banner = ConfigBanner::findOrFail($id);
        $title = 'Cập nhật page cấu hình banner';

        return view('backend.config.banner.edit', compact('title', 'banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated =  $request->validate([
            'page_name' => 'required',
            'title' => 'nullable|string|max:255',
            'path_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable',
        ],   __('request.messages'), [
            'path_image' => 'Hình ảnh',
            'page_name' => 'Tên trang',
        ]);

        $banner = ConfigBanner::find($id);
        if ($request->hasFile('path_image')) {
            deleteImage($banner->path_image);
            $validated['path_image'] = saveImages($request, 'path_image', 'banners', 2500, 1143);
        }

        $banner->update($validated);
        session()->flash('success', 'Cập nhật về banner đã được thêm thành công!');
        return redirect()->route('admin.config.banner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = ConfigBanner::find($id);
        deleteImage($banner->path_image);
        $banner->delete();
        session()->flash('success', 'Xóa thành công!');
        return redirect()->back();
    }
}
