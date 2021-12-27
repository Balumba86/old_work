<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pages extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'content' => 'array'
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $fillable = [
        'title',
        'slug',
        'content'
    ];

    protected $hidden = [
        'id',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
