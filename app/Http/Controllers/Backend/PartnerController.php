<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Danh sách đối tác';

        $partners = Partner::latest('created_at')->get();
        return view('backend.partner.index', compact('title', 'partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Thêm đối tác';
        return view('backend.partner.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $criteria = $request->validate(
            [
                'name' => 'required|unique:partners|string|max:50',
                'website_url' => 'nullable|url',
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description' => 'nullable',
                'is_active' => 'required|boolean|in:1,0',
            ],
            __('request.messages'),
            [
                'name' => 'Tên đối tác',
                'website_url' => 'Đường dẫn',
                'logo' => 'Hình ảnh',
                'description' => 'Mô tả',
                'is_active' => 'Trạng thái',
            ]
        );

        $criteria['logo'] = saveImages($request, 'logo', 'partner', 500, 400);

        Partner::create($criteria);

        session()->flash('success', 'Đối tác đã được thêm thành công!');

        return redirect()->route('admin.partners.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        $title = 'Cập nhật đối tác';
        return view('backend.partner.edit', compact('title', 'partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        $criteria = $request->validate(
            [
                'name' => 'required|unique:partners,name,' . $partner->id . '|string|max:50',
                'website_url' => 'nullable|url',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description' => 'nullable',
                'is_active' => 'required|boolean|in:1,0',
            ],
            __('request.messages'),
            [
                'name' => 'Tên đối tác',
                'website_url' => 'Đường dẫn',
                'logo' => 'Hình ảnh',
                'description' => 'Mô tả',
                'is_active' => 'Trạng thái',
            ]
        );

        if ($request->hasFile('logo')) {
            deleteImage($partner->logo);
            $criteria['logo'] = saveImages($request, 'logo', 'partner', 500, 400);
        }

        $partner->update($criteria);

        session()->flash('success', 'Đối tác đã được cập nhật thành công!');

        return redirect()->route('admin.partners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        deleteImage($partner->logo);
        $partner->delete();
        session()->flash('success', 'Đối tác đã được xóa thành công!');
        return redirect()->back();
    }
}
