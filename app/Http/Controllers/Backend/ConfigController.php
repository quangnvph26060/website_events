<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfigController extends Controller
{
    //
    public function index(){
        $title = 'Thông tin cửa hàng';
        $config = Config::first();
        return view('backend.config.index', compact('config', 'title'));
    }

    public function update(Request $request)
    {
        $config = Config::first();
        $data = [
            'title_seo' => $request->input('title_seo'),
            'meta_seo' =>  $request->input('meta_seo'),
            'description_seo' => $request->input('description_seo'),
            'description' => $request->input('description'),
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'constant_hotline' => $request->input('constant_hotline'),
            'footer' => $request->input('footer'),
        ];

        if ($request->hasFile('logo')) {
            $data['logo'] = saveImages($request, 'logo', 'logo', 150, 150);
        }

        if($config){
            $config->update($data);
        }else{
            Config::create($data);
        }


         return redirect()->route('admin.config.index')->with('success', 'Cập nhật thông tin thành công');

    }
}
