<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class Service
 *
 * @package Petstore30
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 *
 * @OA\Schema(
 *     title="Модель сервиса/услуги",
 *     description="Модель сервиса/услуги",
 * )
 */

class Service extends Model
{
    use HasFactory;

    /**
     * @OA\Property(
     *     description="Название заведения",
     *     title="Название",
     * )
     *
     * @var string
     */
    private $title;

    /**
     * @OA\Property(
     *     description="Slug заведения",
     *     title="Slug",
     * )
     *
     * @var string
     */
    private $slug;

    /**
     * @OA\Property(
     *     description="Описание заведения",
     *     title="Описание",
     * )
     *
     * @var string
     */
    private $description;

    /**
     * @OA\Property(
     *     description="SEO заголовок заведения",
     *     title="SEO заголовок",
     * )
     *
     * @var string
     */
    private $meta_title;

    /**
     * @OA\Property(
     *     description="SEO ключевые слова заведения",
     *     title="SEO ключевые слова",
     * )
     *
     * @var string
     */
    private $meta_keywords;

    /**
     * @OA\Property(
     *     description="SEO описание заведения",
     *     title="SEO описание",
     * )
     *
     * @var string
     */
    private $meta_description;

    /**
     * @OA\Property(
     *     description="Часы работы заведения",
     *     title="Часы работы",
     * )
     *
     * @var string
     */
    private $hours_work;

    /**
     * @OA\Property(
     *     description="Телефон заведения",
     *     title="Телефон",
     * )
     *
     * @var string
     */
    private $phone;

    /**
     * @OA\Property(
     *     description="Веб-сайт заведения",
     *     title="Веб-сайт",
     * )
     *
     * @var string
     */
    private $website;

    /**
     * @OA\Property(
     *     description="Логотип заведения",
     *     title="Логотип",
     * )
     *
     * @var string
     */
    private $logo;

    /**
     * @OA\Property(
     *     description="Показывать на главной странице",
     *     title="На главной",
     * )
     *
     * @var boolean
     */
    private $show_main;

    /**
     * @OA\Property(
     *     description="Сортировка показа на главной",
     *     title="Сортировка",
     * )
     *
     * @var integer
     */
    private $sort;

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

    public function category()
    {
        return $this->hasOne(ServiceCategory::class, 'id', 'category');
    }
}
