<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'meta_title',
        'meta_keywords',
        'meta_description'
    ];

    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug($this->title, '-');
    }
}
