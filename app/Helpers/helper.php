<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Filesystem\FilesystemAdapter;
use Stichoza\GoogleTranslate\GoogleTranslate;

/**
 * Lưu hình ảnh và trả về đường dẫn.
 *
 * @param string $inputName
 * @param string $directory
 * @return string|null
 */
function saveImages($request, string $inputName, string $directory = 'images', $width = 150, $height = 150, $isArray = false)
{
    $paths = [];

    // Kiểm tra xem có file không
    if ($request->hasFile($inputName)) {
        // Lấy tất cả các file hình ảnh
        $images = $request->file($inputName);

        if (!is_array($images)) {
            $images = [$images]; // Đưa vào mảng nếu chỉ có 1 ảnh
        }

        // Tạo instance của ImageManager
        $manager = new ImageManager(new Driver());

        foreach ($images as $key => $image) {
            // Đọc hình ảnh từ đường dẫn thực
            $img = $manager->read($image->getPathName());

            // Thay đổi kích thước
            $img->resize($width, $height);

            // Tạo tên file duy nhất
            $filename = time() . uniqid() . '.' . $image->getClientOriginalExtension();

            // Lưu hình ảnh đã được thay đổi kích thước vào storage
            Storage::disk('public')->put($directory . '/' . $filename, $img->encode());

            // Lưu đường dẫn vào mảng
            $paths[$key] = $directory . '/' . $filename;
        }

        // Trả về danh sách các đường dẫn
        return $isArray ? $paths : $paths[0];
    }

    return null;
}

function saveImage($request, string $inputName, string $directory = 'images')
{
    if ($request->hasFile($inputName)) {
        $image = $request->file($inputName);
        $filename = time() . uniqid() . '.' . $image->getClientOriginalExtension();
        Storage::disk('public')->put($directory . '/' . $filename, file_get_contents($image->getPathName()));
        return $directory . '/' . $filename;
    }
}

function showImage($path)
{
    /** @var FilesystemAdapter $storage */
    $storage = Storage::disk('public');

    if ($path && Storage::exists($path)) {
        return $storage->url($path);
    }

    return asset('default.jpg');
}

function deleteImage($path)
{
    if ($path && Storage::disk('public')->exists($path)) {
        Storage::disk('public')->delete($path);
    }
}

function translateHtmlContent($html, $targetLocale = 'en')
{
    // Tạo khóa cache dựa trên nội dung và ngôn ngữ
    $cacheKey = "translation_html_" . md5($html) . "_{$targetLocale}";

    // Kiểm tra xem nội dung đã được dịch và lưu trong cache chưa
    return Cache::remember($cacheKey, 86400, function () use ($html, $targetLocale) { // cache for 1 day
        $translator = new GoogleTranslate();
        $translator->setSource();
        $translator->setTarget($targetLocale);

        // Dùng regex để tách nội dung
        return preg_replace_callback('/>([^<]+)</', function ($matches) use ($translator) {
            $text = trim($matches[1]);
            // Bỏ qua nội dung rỗng
            if (!$text) return '><';
            return '>' . $translator->translate($text) . '<';
        }, $html);
    });
}


function cachedTranslate($text, $targetLocale = 'en')
{
    if (empty($text)) {
        return $text;
    }
    // Tạo khóa cache dựa trên nội dung và ngôn ngữ
    $cacheKey = "translation_" . md5($text) . "_{$targetLocale}";

    // Lưu cache trong 1 giờ (3600 giây)
    return Cache::remember($cacheKey, 86400, function () use ($text, $targetLocale) {
        $translator = new GoogleTranslate();
        $translator->setSource(); // Để auto-detect ngôn ngữ
        $translator->setTarget($targetLocale);
        return $translator->translate($text);
    });
}

if (!function_exists('translateAndSave')) {
    /**
     * Dịch nội dung các cột đã chọn và lưu vào các cột tương ứng trong bảng.
     *
     * @param string $table Tên bảng cần dịch.
     * @param int $recordId ID của bản ghi cần dịch.
     * @param array $fields Danh sách các cột cần dịch.
     * @param string $targetLocale Ngôn ngữ đích (mặc định là 'en').
     */
    function translateAndSave($table, $recordId, $fields, $targetLocale = 'en')
    {
        // dd($table, $recordId, $fields, $targetLocale);
        $translator = new GoogleTranslate();
        $translator->setSource('vi'); // Đặt ngôn ngữ nguồn là tiếng Việt
        $translator->setTarget($targetLocale);

        // Mảng lưu các cột đã dịch
        $translatedFields = [];

        foreach ($fields as $field) {
            // dd($field);
            // Lấy giá trị gốc của trường từ cơ sở dữ liệu
            $originalText = DB::table($table)->where('id', $recordId)->value($field);

            // Kiểm tra nếu trường có dữ liệu, thì mới dịch
            if ($originalText) {
                // Kiểm tra nếu có thẻ HTML, giữ nguyên cấu trúc HTML khi dịch
                if (strip_tags($originalText) !== $originalText) {
                    $translatedText = preg_replace_callback('/>([^<]+)</', function ($matches) use ($translator) {
                        return '>' . $translator->translate($matches[1]) . '<';
                    }, $originalText);
                } else {
                    $translatedText = $translator->translate($originalText);
                }

                // Lưu bản dịch vào mảng, với tên cột thêm đuôi ngôn ngữ
                $translatedFields["{$field}_{$targetLocale}"] = $translatedText;

                // Log::info($field . ': ' . $originalText . ' --> ' . $translatedText);
            }
        }

        // Cập nhật bản ghi với các trường đã dịch
        DB::table($table)->where('id', $recordId)->update($translatedFields);
        // $table->where('id', $recordId)->update($translatedFields);
    }
}

// if (!function_exists('translateAndSave')) {
//     /**
//      * Dịch nội dung các cột đã chọn và lưu vào các cột tương ứng trong bảng.
//      *
//      * @param string $table Tên bảng cần dịch.
//      * @param int $recordId ID của bản ghi cần dịch.
//      * @param array $fields Danh sách các cột cần dịch.
//      * @param string $targetLocale Ngôn ngữ đích (mặc định là 'en').
//      */
//     function translateAndSave($table, $recordId, $fieldsToTranslate, $targetLocale = 'en')
//     {
//         $translator = new GoogleTranslate();
//         $translator->setSource('vi'); // Đặt ngôn ngữ nguồn là tiếng Việt
//         $translator->setTarget($targetLocale);

//         // Lấy tất cả dữ liệu gốc một lần
//         $originalRecord = DB::table($table)->where('id', $recordId)->first();

//         // Mảng lưu các cột đã dịch
//         $translatedFields = [];
//         $textsToTranslate = [];

//         // Gộp tất cả văn bản cần dịch vào mảng
//         foreach ($fieldsToTranslate as $field) {
//             if (isset($originalRecord->$field) && $originalRecord->$field) {
//                 // Tách văn bản khỏi mã HTML
//                 $textsToTranslate[$field] = strip_tags($originalRecord->$field);
//             }
//         }

//         // Dịch tất cả các văn bản cùng một lần
//         if (!empty($textsToTranslate)) {
//             $translatedTexts = $translator->translate(array_values($textsToTranslate));

//             // Gán các trường đã dịch vào mảng
//             foreach ($fieldsToTranslate as $index => $field) {
//                 if (isset($textsToTranslate[$field]) && isset($translatedTexts[$index])) {
//                     // Gắn kết lại mã HTML với văn bản đã dịch
//                     $translatedFields["{$field}_{$targetLocale}"] = str_replace(strip_tags($originalRecord->$field), $translatedTexts[$index], $originalRecord->$field);
//                 }
//             }
//         }

//         // Cập nhật bản ghi với các trường đã dịch
//         if (!empty($translatedFields)) {
//             DB::table($table)->where('id', $recordId)->update($translatedFields);
//         }
//     }
// }




if (!function_exists('getLocalizedContent')) {
    /**
     * Hiển thị nội dung theo ngôn ngữ người dùng chọn.
     *
     * @param object $model Bản ghi từ Model.
     * @param string $field Cột cần hiển thị.
     * @param string $locale Ngôn ngữ hiện tại (mặc định là 'vi').
     * @return string Nội dung đã được dịch nếu có.
     */
    function getLocalizedContent($model, $field, $locale = 'vi')
    {

        if ($locale === 'en' && isset($model->{"{$field}_en"})) {
            return $model->{"{$field}_en"};
        }

        return $model->{$field};
    }
}
