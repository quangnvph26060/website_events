<?php

use App\Http\Controllers\Backend\ConfigController;
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

    Route::resource('catalogues', CatalogueController::class);
    route::put('catalogues/{catalogue}/change-status', [CatalogueController::class, 'changeStatus'])->name('catalogues.change-status');

    Route::resource('works', WorkController::class);

    Route::get('config', [ConfigController::class, 'index'])->name('config.index');
    Route::post('config', [ConfigController::class, 'update'])->name('config.update');
});
