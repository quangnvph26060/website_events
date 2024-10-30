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
}
