<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Catalogue extends Model
{
    use HasFactory, NodeTrait;

    const IS_ACTIVE = 1;
    const IS_INACTIVE = 0;
    protected $fillable = [
        'name',
        'slug',
        'image',
        'status',
        'description',
        'parent_id',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
