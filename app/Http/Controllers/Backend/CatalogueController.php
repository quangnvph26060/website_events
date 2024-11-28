<?php

namespace App\Http\Controllers\Backend;

use App\Events\TranslateContent;
use App\Models\Catalogue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogue\{
    CatalogueStoreRequest,
    CatalogueUpdateRequest
};

class CatalogueController extends Controller
{
    public function index()
    {
        $title = 'Danh sách danh mục';
        $cataloguesAdmin = Catalogue::latest()->get();


        return view('backend.catalogues.index', compact('cataloguesAdmin', 'title'));
    }


    function create()
    {
        $title = 'Thêm mới danh mục';
        return view('backend.catalogues.create', compact('title'));
    }

    function store(CatalogueStoreRequest $request)
    {
        $criteria = $request->validated();

        if ($request->hasFile('image')) {
            $criteria['image'] = saveImages($request, 'image', 'catalogues', 150, 150);
        }

        $criteria['status'] = $request->status ?: 0;

        $catalogue =  Catalogue::create($criteria);

        event(new TranslateContent('catalogues', $catalogue->id, ['name'], 'en'));

        session()->flash('success', 'Danh mục đã được thêm thành công!');

        return redirect()->route('admin.catalogues.index');
    }

    function edit(Catalogue $catalogue)
    {
        $title = 'Cập nhật danh mục';


        return view('backend.catalogues.edit', compact('catalogue', 'title'));
    }


    function update(CatalogueUpdateRequest $request, Catalogue $catalogue)
    {
        $criteria = $request->validated();

        if ($request->hasFile('image')) {
            $criteria['image'] = saveImages($request, 'image', 'catalogues', 150, 150);
            deleteImage($catalogue->image);
        }

        $criteria['status'] = $request->status ?: 0;

        $catalogue->update($criteria);

        event(new TranslateContent('catalogues', $catalogue->id, ['name'], 'en'));

        session()->flash('success', 'Danh mục đã được cập nhật thành công!');

        return redirect()->route('admin.catalogues.index');
    }

    function changeStatus(Catalogue $catalogue)
    {
        $catalogue->status = !$catalogue->status;
        $catalogue->save();

        session()->flash('success', 'Trạng thái đã được cập nhật thành công!');

        return redirect()->route('admin.catalogues.index');
    }
}
