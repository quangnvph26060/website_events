<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Spatie\MediaLibrary\InteractsWithMedia;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'cata_id',
        'title',
        'description',
        'customer',
        'project_name',
        'participants_count',
        'year',
        'location',
        'link_video'
    ];

    public function catalogue()
    {
        return $this->belongsTo(Catalogue::class, 'cata_id');
    }

    public function images()
    {
        return $this->hasMany(WorkImage::class);
    }

    public function catalogues()
    {
        return $this->belongsToMany(Catalogue::class, 'catalogue_work', 'work_id', 'catalogue_id')->withTimestamps();
    }

    public static function boot()
    {

        parent::boot();

        static::creating(function ($work) {
            $work->slug = Str::slug($work->title);
        });
    }
}
