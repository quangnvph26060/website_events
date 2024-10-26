<?php

namespace App\Http\Controllers\Backend\Config;

use App\Models\ConfigSlider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function slider()
    {
        $title = 'Cấu hình slider';

        $sliders = ConfigSlider::orderBy('id', 'desc')->get();

        return view('backend/config/slider/create', compact('title', 'sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show(ConfigSlider $configSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ConfigSlider $configSlider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ConfigSlider $configSlider)
    {
        $validated = $request->validate(
            [
                'path_image' => 'required|array',
                'path_image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'short_content' => 'nullable|array',
                'short_content.*' => 'nullable|string',
                'title' => 'nullable|array',
                'title.*' => 'nullable|string',
            ],
            __('request.messages'),
            [
                'path_image' => 'Hình ảnh',
                'path_image.*' => 'Hình ảnh',
                'short_content' => 'Tóm tắt',
                'short_content.*' => 'Tóm tắt',
                'title' => 'Tiêu đề',
                'title.*' => 'Tiêu đề',
            ]
        );

        $path_image = saveImages($request, 'path_image', 'config.slider', 3125, 2671, true);

        try {
            foreach ((array) $path_image as $key => $value) {
                ConfigSlider::where('id', $key)->update(
                    [
                        'path_image' => $value,
                        'short_content' => $request->short_content[$key],
                        'title' => $request->title[$key],
                    ]
                );
            }

            session()->flash('success', 'Cấu hình đã được cập nhật thành công!');

            return redirect()->back();
        } catch (\Exception $e) {
            foreach ((array) $path_image as $key => $value) {
                deleteImage($value);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ConfigSlider $configSlider)
    {
        //
    }
}
