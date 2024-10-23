<?php

namespace App\Http\Controllers\Backend;

use App\Models\Work;
use App\Models\Catalogue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Danh sách tác phẩm';
        $works = Work::with('catalogues')->latest()->get();

        return view('backend.works.index', compact('works', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Thêm mới tác phẩm';
        $catalogues = Catalogue::isTag()->latest()->get();
        return view('backend.works.create', compact('title', 'catalogues'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'title' => 'required|string|max:255',
                'categories' => 'required|array',
            ],
            __('request.messages'),
            [
                'categories' => 'Danh sách',
                'title' => 'Tiêu đề',
            ]
        );

        DB::beginTransaction();

        try {
            $work = Work::create($validated);

            $work->catalogues()->sync($request->categories);

            if ($request->image_path) {
                foreach ($request->image_path as $image) {
                    $work->images()->create([
                        'image_path' => $image
                    ]);
                }
            }

            session()->flash('success', 'Tác phẩm đã được thêm thành công!');

            DB::commit();
            return redirect()->route('admin.works.index');
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Tác phẩm đã xảy ra lỗi!');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Work $work)
    {
        $work->load('images', 'catalogues'); // Tải mối quan hệ images và catalogues
        $title = 'Cập nhật tác phẩm';
        $catalogues = Catalogue::isTag()->latest()->get();

        // Lấy các danh mục đã chọn
        $selectedCategories = $work->catalogues->pluck('id')->toArray();

        return view('backend.works.edit', compact('work', 'title', 'catalogues', 'selectedCategories'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Work $work)
    {
        $validated = $request->validate(
            [
                'title' => 'required|string|max:255|unique:works,title,' . $work->id,
                'categories' => 'required|array',
            ],
            __('request.messages'),
            [
                'categories' => 'Danh sách',
                'title' => 'Tiêu đề',
            ]
        );

        DB::beginTransaction();

        try {
            $work->update($validated);

            $work->catalogues()->sync($request->categories);

            if ($request->deleted_images) {
                foreach ($request->deleted_images as $image) {
                    if ($image) {
                        $imagePath =  $work->images()->where('id', $image)->first();
                        deleteImage($imagePath->image_path);
                        $imagePath->delete();
                    }
                }
            }

            if ($request->image_path) {
                foreach ($request->image_path as $image) {
                    $work->images()->create([
                        'image_path' => $image
                    ]);
                }
            }

            session()->flash('success', 'Tác phẩm đã được cập nhật thành công!');

            DB::commit();

            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Tác phẩm đã xảy ra lỗi!');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Work $work)
    {
        $work = $work->load('images', 'catalogues');

        if ($work->images()->count() > 0) {
            foreach ($work->images as $image) {
                if ($image->image_path) {
                    deleteImage($image->image_path);
                }
            }
        }
        $work->catalogues()->detach();

        $work->delete();

        session()->flash('success', 'Xoá tác phẩm thành công!');

        return redirect()->back();
    }
}
