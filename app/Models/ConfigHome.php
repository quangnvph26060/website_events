<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigHome extends Model
{
    use HasFactory;
    protected $table = 'config_home';

    protected $fillable = [
        'title_1',
        'quote_1',
        'content',
        'title_2',
        'quote_2',
        'title_3',
        'quote_3',
        'title_4',
        'quote_4',
        'map',
        'content_en',

    ];

    protected $casts = [
        'content' => 'array',
        'content_en' => 'array',
    ];

    // protected static function boot()
    // {
    //     parent::boot();

    //     $columns = [
    //         'title_1',
    //         'quote_1',
    //         'content',
    //         'title_2',
    //         'quote_2',
    //         'title_3',
    //         'quote_3',
    //         'title_4',
    //         'quote_4',
    //     ];

    //     static::saving(function ($configHome) use ($columns) {
    //         $fieldsToTranslate = [];

    //         foreach ($columns as $column) {
    //             if ($configHome->isDirty($column)) {
    //                 $fieldsToTranslate[] = $column;
    //             }
    //         }

    //         if (!empty($fieldsToTranslate)) {
    //             translateAndSave('config_home', $configHome->id, $fieldsToTranslate, 'en');
    //         }
    //     });
    // }
}
