<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    use HasFactory;

    const IS_ACTIVE = 1;
    const IS_INACTIVE = 0;
    protected $fillable = [
        'name',
        'slug',
        'image',
        'status',
        'description',
        'is_tag'
    ];

    protected $casts = [
        'status' => 'boolean',
        'is_tag' => 'boolean'
    ];

    // public function scopeIsTag(){
    //     return $this->is_tag;
    // }
    public static function isTag()
    {
        return self::where('is_tag', 1); // Use self:: to reference the model
    }

    public static function isNotTag()
    {
        return self::where('is_tag', 0); // Use self:: to reference the model
    }

    public function works()
    {
        return $this->belongsToMany(Work::class, 'catalogue_work');
    }
}
