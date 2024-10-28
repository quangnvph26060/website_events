<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigBanner extends Model
{
    use HasFactory;
    protected $fillable = ['page_name' , 'title' , 'description' , 'status' , 'path_image'];
}
