<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfigController extends Controller
{
    //
    public function index()
    {
        $title = 'Cấu hình chung';
        $config = Config::first();
        return view('backend.config.index', compact('config', 'title'));
    }

    public function update(Request $request)
    {
        $validated =  $request->validate(
            [
                'title_seo' => 'required|string|max:255',
                'meta_seo' => 'nullable|string|max:255',
                'description_seo' => 'nullable|string|max:300',
                'description' => 'nullable|string|max:255',
                'address' => 'nullable|string|max:255',
                'email' => 'nullable|string|max:255',
                'constant_hotline' => 'nullable|string|max:255',
                'footer' => 'nullable|string|max:255',
                'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'head_scripts' => 'nullable|string',
                'body_scripts' => 'nullable|string',
                'footer_scripts' => 'nullable|string',
                'company' => 'nullable|string|max:255',
            ],
            __('request.messages')
        );


        $config = Config::first();


        if ($request->hasFile('icon')) {
            deleteImage($config->icon);
            $validated['icon'] = saveImages($request, 'icon', 'icon');
        }

        if ($request->hasFile('logo')) {
            deleteImage($config->logo);
            $validated['logo'] = saveImage($request, 'logo', 'logo');
        }

        if ($config) {
            $config->update($validated);
        } else {
            Config::create($validated);
        }

        translateAndSave('config', $config->id, ['title_seo', 'meta_seo', 'description_seo', 'description', 'address', 'footer'], 'en');

        return redirect()->route('admin.config.index')->with('success', 'Cập nhật thông tin thành công');
    }
}
