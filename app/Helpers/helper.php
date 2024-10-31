<?php

use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Filesystem\FilesystemAdapter;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\Cache;

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
    return Cache::remember($cacheKey, 3600, function () use ($html, $targetLocale) {
        // Tạo một instance của GoogleTranslate
        $translator = new GoogleTranslate();
        $translator->setSource(); // Auto-detect ngôn ngữ nguồn
        $translator->setTarget($targetLocale);

        // Tách văn bản từ HTML và dịch từng phần
        $translatedHtml = preg_replace_callback('/>([^<]+)</', function ($matches) use ($translator) {
            $text = $matches[1];
            // Dịch văn bản và giữ nguyên HTML
            return '>' . $translator->translate($text) . '<';
        }, $html);

        return $translatedHtml;
    });
}

function cachedTranslate($text, $targetLocale = 'en')
{
    if(empty($text)){
        return $text;
    }
    // Tạo khóa cache dựa trên nội dung và ngôn ngữ
    $cacheKey = "translation_" . md5($text) . "_{$targetLocale}";

    // Lưu cache trong 1 giờ (3600 giây)
    return Cache::remember($cacheKey, 3600, function () use ($text, $targetLocale) {
        $translator = new GoogleTranslate();
        $translator->setSource(); // Để auto-detect ngôn ngữ
        $translator->setTarget($targetLocale);
        return $translator->translate($text);
    });
}
