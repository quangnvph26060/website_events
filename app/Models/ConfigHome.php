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
        'image_3',
        'title_4',
        'quote_4',
        'map',

    ];

    protected $casts = [
        'content' => 'array'
    ];
}
