<?php

namespace App\Http\Controllers\Backend\Config;

use App\Models\ConfigHome;
use Illuminate\Http\Request;
use App\Jobs\SendTestEmailJob;
use App\Events\TranslateContent;
use App\Jobs\TranslateContentJob;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;

class ConfigHomePageController extends Controller
{
    function index()
    {

        $title = 'Cấu hình trang chủ';
        $configHome = ConfigHome::first();
        return view('backend.config.home.home', compact('title', 'configHome'));
    }

    function update(Request $request)
    {
        $validated = $request->validate(
            [
                'title_1' => 'required|string|max:255',
                'quote_1' => 'nullable|string|max:255',
                'content' => 'nullable',
                'title_2' => 'required|string|max:255',
                'quote_2' => 'nullable|string|max:255',
                'title_3' => 'required|string|max:255',
                'quote_3' => 'nullable|string|max:255',
                'title_4' => 'required|string|max:255',
                'quote_4' => 'nullable|string|max:255',
                'map' => 'nullable|string',
            ],
            __('request.messages')
        );

        $configHome = ConfigHome::first();

        // Khởi tạo danh sách các trường cần dịch
        $fieldsToTranslate = [
            'title_1',
            'quote_1',
            'content',
            'title_2',
            'quote_2',
            'title_3',
            'quote_3',
            'title_4',
            'quote_4',
        ];

        // Kiểm tra xem có bản ghi nào chưa
        if ($configHome) {
            // Lưu giá trị cũ để so sánh
            $oldValues = $configHome->only(array_keys($validated));

            // Cập nhật dữ liệu
            $configHome->update($validated);

            // So sánh các giá trị mới với giá trị cũ
            $needsTranslation = [];
            foreach ($fieldsToTranslate as $field) {
                if (isset($validated[$field]) && $validated[$field] !== $oldValues[$field]) {
                    $needsTranslation[] = $field; // Lưu lại trường cần dịch
                }
            }

            // Chỉ gọi dịch nếu có trường nào đã thay đổi
            if (!empty($needsTranslation)) {
                event(new TranslateContent('config_home', $configHome->id, $needsTranslation, 'en'));
            }
        } else {
            $configHome = ConfigHome::create($validated);
            // Gọi dịch ngay sau khi tạo mới
            event(new TranslateContent('config_home', $configHome->id, $fieldsToTranslate, 'en'));
        }

        session()->flash('success', 'Cấu hình trang chủ đã được cập nhật thành công!');

        return redirect()->back();
    }

}
