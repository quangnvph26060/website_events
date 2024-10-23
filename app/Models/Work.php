<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Spatie\MediaLibrary\InteractsWithMedia;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function images()
    {
        return $this->hasMany(WorkImage::class);
    }

    public function catalogues()
    {
        return $this->belongsToMany(Catalogue::class, 'catalogue_work', 'work_id', 'catalogue_id')->withTimestamps();
    }
}
