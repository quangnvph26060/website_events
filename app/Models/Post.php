<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'meta_description',
        'meta_keywords',
        'featured_image',
        'is_published',
    ];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($tag) {
            $tag->slug = Str::slug($tag->title);
        });

        static::updating(function ($tag) {
            $tag->slug = Str::slug($tag->title);
        });
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

    public function scopeIsPublished($query)
    {
        return $query->where('is_published', 1);
    }

    public function scopeIsNotPublished($query)
    {
        return $query->where('is_published', 0);
    }

    protected $casts = [
        'is_published' => 'boolean',
    ];
}
