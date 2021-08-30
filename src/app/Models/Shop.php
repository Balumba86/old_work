<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'hours_work',
        'phone',
        'website',
        'logo',
        'show_main',
        'sort',
        'category'
    ];

    protected $hidden = [
        'category',
    ];

    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug($this->title, '-');
    }

    public function category()
    {
        return $this->hasOne(ShopCategory::class, 'id', 'category');
    }
}
