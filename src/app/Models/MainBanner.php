<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainBanner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'link'
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];
}
