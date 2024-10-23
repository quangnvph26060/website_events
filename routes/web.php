<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\WorkController;
use App\Http\Controllers\Backend\CatalogueController;
use App\Http\Controllers\Backend\DashboardController;

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

route::prefix('admin')->name('admin.')->group(function () {
    route::controller(DashboardController::class)->group(function () {
        route::get('/', 'index')->name('dashboard');
    });

    Route::resource('catalogues', controller: CatalogueController::class);
    route::put('catalogues/{catalogue}/change-status', [CatalogueController::class, 'changeStatus'])->name('catalogues.change-status');

    Route::resource('works', controller: WorkController::class);

    Route::post('temp-upload', function (Request $request) {
        if ($request->hasFile('image')) {
            $path = saveImages($request, 'image', 'uploads', 150, 150);

            return response()->json([
                'path' => $path,
            ]);
        }

        return response()->json(['error' => 'No image uploaded'], 400);
    })->name('temp-images.create');


    Route::delete('temp-upload', function (Request $request) {
        deleteImage($request->path);

        return response()->json([
            'status' => true
        ]);
    })->name('temp-images.destroy');
});
