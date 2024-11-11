<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    protected $table = 'config';

    protected $fillable = [
        'title_seo',
        'meta_seo',
        'description_seo',
        'description',
        'address',
        'email',
        'constant_hotline',
        'logo',
        'icon',
        'footer',
        'head_scripts',
        'body_scripts',
        'footer_scripts',
    ];

    protected static function boot()
    {
        parent::boot();

        // Danh sách các cột cần dịch
        $columns = ['title_seo', 'meta_seo', 'description_seo', 'description', 'address', 'footer'];

        // Lắng nghe sự kiện saving để tự động dịch
        static::saving(function ($config) use ($columns) {
            // Mảng lưu các trường cần dịch
            $fieldsToTranslate = [];

            // Kiểm tra từng trường trong danh sách
            foreach ($columns as $column) {
                // Kiểm tra nếu trường đã thay đổi
                if ($config->isDirty($column)) {
                    $fieldsToTranslate[] = $column;
                }
            }

            // Nếu có trường nào cần dịch thì thực hiện
            if (!empty($fieldsToTranslate)) {
                // Dịch và lưu các trường cần thiết
                translateAndSave('config', $config->id, $fieldsToTranslate, 'en');
            }
        });
    }

    // static::saving(function ($tour) {
    //     // Kiểm tra xem các trường có thay đổi không
    //     if ($tour->isDirty('name') || $tour->isDirty('description')) {
    //         // Dịch và lưu các trường 'title' và 'description' sang tiếng Anh
    //         translateAndSave('tours', $tour->id, ['name', 'description'], 'en');
    //     }
    // });
}
