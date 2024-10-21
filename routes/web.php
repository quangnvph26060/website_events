<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.pages.portfolio-detail');
});

Route::post('upload', function (Request $request) {
    if ($request->hasFile('upload')) {
        // Lưu file ảnh vào thư mục 'uploads' trong thư mục public
        $file = $request->file('upload');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);

        // Lấy URL của ảnh đã upload
        $url = asset('uploads/' . $fileName);

        // Trả về kết quả theo định dạng CKEditor yêu cầu
        return response()->json([
            'url' => $url
        ]);
    }

    return response()->json(['error' => 'No file uploaded'], 400);
})->name('upload');

route::post('post', function (Request $request) {
    dd($request->all());
})->name('ckeditor.store');
