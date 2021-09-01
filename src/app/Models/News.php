<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title',
                           'slug',
                           'text',
                           'main_img',
                           'published',
                           'meta_title',
                           'meta_keywords',
                           'meta_description'];

    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug($this->title, '-');
    }
}
