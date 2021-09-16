<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $fillable = [
        'target',
        'target_id',
        'path'
    ];

    protected $hidden = [
        'target',
        'target_id',
        'created_at',
        'updated_at'
    ];
}
