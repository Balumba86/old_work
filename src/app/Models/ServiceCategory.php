<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class ServiceCategory
 *
 * @package Petstore30
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 *
 * @OA\Schema(
 *     title="Модель категории сервиса/услуги",
 *     description="Модель категории сервиса/услуги",
 * )
 */

class ServiceCategory extends Model
{
    use HasFactory;

    /**
     * @OA\Property(
     *     description="Название категории",
     *     title="Название",
     * )
     *
     * @var string
     */
    private $title;

    /**
     * @OA\Property(
     *     description="Slug категории",
     *     title="Slug",
     * )
     *
     * @var string
     */
    private $slug;

    /**
     * @OA\Property(
     *     description="Описание категории",
     *     title="Описание",
     * )
     *
     * @var string
     */
    private $description;

    /**
     * @OA\Property(
     *     description="SEO заголовок категории",
     *     title="SEO заголовок",
     * )
     *
     * @var string
     */
    private $meta_title;

    /**
     * @OA\Property(
     *     description="SEO ключевые слова категории",
     *     title="SEO ключевые слова",
     * )
     *
     * @var string
     */
    private $meta_keywords;

    /**
     * @OA\Property(
     *     description="SEO описание категории",
     *     title="SEO описание",
     * )
     *
     * @var string
     */
    private $meta_description;

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
