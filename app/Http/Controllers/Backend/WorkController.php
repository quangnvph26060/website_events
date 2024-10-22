<?php

namespace App\Http\Controllers\Backend;

use App\Models\Work;
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
        $works = Work::with('catalogues')->get();

        return view('backend.works.index', compact('works', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Thêm mới tác phẩm';
        return view('backend.works.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'file.*' => 'image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        DB::beginTransaction();

        try {
            $work = Work::create($validated);

            if ($request->hasFile('file')) {
                dd($request->file('file'));
                foreach ($request->file('file') as $file) {
                    $work->addMedia($file)->toMediaCollection();
                }
            }

            dd($work);

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Work $work)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Work $work)
    {
        $work->clearMediaCollection(); // Xóa tất cả file media liên quan đến Work
        return response()->json(['success' => 'File deleted successfully.']);
    }
}
