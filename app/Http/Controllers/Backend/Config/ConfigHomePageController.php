<?php

namespace App\Http\Controllers\Backend\Config;

use App\Http\Controllers\Controller;
use App\Models\ConfigHome;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ConfigHomePageController extends Controller
{
    function index()
    {

        $title = 'Cấu hình trang chủ';
        $configHome = ConfigHome::first();
        return view('backend.config.home.home', compact('title', 'configHome'));
    }

    function update(Request $request)
    {
        $validated = $request->validate(
             [
                'title_1' => 'required|string|max:255',
                'quote_1' => 'nullable|string|max:255',
                'content' => 'nullable',
                'title_2' => 'required|string|max:255',
                'quote_2' => 'nullable|string|max:255',
                'title_3' => 'required|string|max:255',
                'quote_3' => 'nullable|string|max:255',
                'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'title_4' => 'required|string|max:255',
                'quote_4' => 'nullable|string|max:255',
                'map' => 'nullable|string',
            ],
             __('request.messages'),
        );

        $configHome = ConfigHome::first();

        if ($request->hasFile('image_3')) {
            deleteImage($configHome->image_3);
            $validated['image_3'] = saveImages($request, 'image_3', 'config.home', 3125, 2671);
        }


        if ($configHome) {
            $configHome->update($validated);
        } else {
            $configHome = ConfigHome::create($validated);
        }

        session()->flash('success', 'Cấu hình trang chủ đã được cập nhật thành công!');

        return redirect()->back();
    }
}
