<?php

namespace App\Http\Controllers\Backend;

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
        $catalogues = Catalogue::defaultOrder()->withDepth()->get();

        return view('backend.catalogues.index', compact('catalogues', 'title'));
    }


    function create()
    {
        $title = 'Thêm mới danh mục';
        // $catalogues = Catalogue::get()->toTree();
        $catalogues = Catalogue::defaultOrder()->withDepth()->get();
        return view('backend.catalogues.create', compact('catalogues', 'title'));
    }

    function store(CatalogueStoreRequest $request)
    {
        $criteria = $request->validated();

        if ($request->hasFile('image')) {
            $criteria['image'] = saveImages($request, 'image', 'catalogues', 150, 150);
        }

        $newCatalogue = new Catalogue($criteria);

        $parent = Catalogue::find($request->parent_id);
        if ($parent) {
            $parent->appendNode($newCatalogue);
        } else {
            $newCatalogue->save();
        }

        session()->flash('success', 'Danh mục đã được thêm thành công!');

        return redirect()->route('admin.catalogues.index');
    }

    function edit(Catalogue $catalogue)
    {
        $title = 'Cập nhật danh mục';

        // Lấy tất cả danh mục con của danh mục hiện tại
        $descendantIds = $catalogue->descendants()->pluck('id');

        // Loại bỏ chính danh mục đang được chỉnh sửa và tất cả danh mục con của nó khỏi danh sách
        $catalogues = Catalogue::defaultOrder()
            ->withDepth()
            ->whereNotIn('id', $descendantIds->push($catalogue->id)) // Loại bỏ danh mục hiện tại và danh mục con
            ->get();

        return view('backend.catalogues.edit', compact('catalogue', 'catalogues', 'title'));
    }


    function update(CatalogueUpdateRequest $request, Catalogue $catalogue)
    {
        $criteria = $request->validated();

        // dd($criteria);

        if ($request->hasFile('image')) {
            $criteria['image'] = saveImages($request, 'image', 'catalogues', 150, 150);
            deleteImage($catalogue->image);
        }

        $catalogue->update($criteria);

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
