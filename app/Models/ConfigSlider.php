<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigSlider extends Model
{
    use HasFactory;

    protected $table = 'config_sliders';

    protected $fillable = [
        'path_image',
        'title',
    ];
}
