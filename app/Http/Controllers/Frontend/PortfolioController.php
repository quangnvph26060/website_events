<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio($slug = null)
    {
        if (is_null($slug)) {
            $catalogues = \App\Models\Catalogue::isNotTag()->get();
            $works = \App\Models\Work::with('images', 'catalogues')->paginate(10);
            return view('frontend.pages.portfolio', compact('catalogues', 'works'));
        }

        $work = \App\Models\Work::with('images', 'catalogues')->where('slug', $slug)->first();

        if (!$work) {
            abort(404);
        }

        return view('frontend.pages.portfolio-detail', compact('work'));
    }


    function portfolioTag($slug)
    {
        $catalogue = \App\Models\Catalogue::isTag()->where('slug', $slug)->with('works.images')->first();

        if (!$catalogue) {
            abort(404);
        }

        return view('frontend/pages/tag-detail', compact('catalogue'));
    }

    public function ajax(Request $request)
    {
        if ($request->ajax()) {

            $query = \App\Models\Work::with('images');

            // Kiểm tra điều kiện `option`
            if ($request->option) {
                $query->where('cata_id', $request->option['value']);
            }

            // Xử lý phân trang nếu action là `gdlr_core_portfolio_ajax`
            if ($request->action == 'gdlr_core_portfolio_ajax') {
                $works = $query->paginate(10);

                $view = 'frontend.response.work-list-portfolio';
                $pagination = $works->links('vendor.pagination.custom')->toHtml();
            } else {
                $view = 'frontend.response.work-list-home';
                $works = $query->latest('id')->limit(10)->get();
            }


            // Trả về dữ liệu dưới dạng JSON, bao gồm cả phân trang nếu có
            return response()->json([
                'status' => 'success',
                'content' => view($view, compact('works'))->render(),
                'pagination' => $pagination ?? '',
            ]);
        }

        // Nếu không phải là yêu cầu AJAX, trả về lỗi
        return response()->json(['status' => 'error', 'message' => 'Invalid request'], 400);
    }
}
