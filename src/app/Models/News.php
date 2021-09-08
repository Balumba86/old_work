<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class News
 *
 * @package Petstore30
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 *
 * @OA\Schema(
 *     title="Модель новости",
 *     description="Модель новости",
 * )
 */

class News extends Model
{
    use HasFactory;

    /**
     * @OA\Property(
     *     description="Заголовок новости",
     *     title="Название",
     * )
     *
     * @var string
     */
    private $title;

    /**
     * @OA\Property(
     *     description="Транслит заголовка новости для ЧПУ",
     *     title="Slug",
     * )
     *
     * @var string
     */
    private $slug;

    /**
     * @OA\Property(
     *     description="Текст новости",
     *     title="Текст новости",
     * )
     *
     * @var string
     */
    private $text;

    /**
     * @OA\Property(
     *     description="Изображение для списка статей",
     *     title="Картинка",
     * )
     *
     * @var string
     */
    private $main_img;

    /**
     * @OA\Property(
     *     description="Метка того опубликована новость или снята с публикации",
     *     title="Опубликовано",
     * )
     *
     * @var boolean
     */
    private $published;

    /**
     * @OA\Property(
     *     description="SEO заголовок новости",
     *     title="SEO название",
     * )
     *
     * @var string
     */
    private $meta_title;

    /**
     * @OA\Property(
     *     description="Ключевые слова для SEO",
     *     title="Ключевые слова",
     * )
     *
     * @var string
     */
    private $meta_keywords;

    /**
     * @OA\Property(
     *     description="Описание для SEO",
     *     title="Описание статьи",
     * )
     *
     * @var string
     */
    private $meta_description;

    protected $fillable = ['title',
                           'slug',
                           'text',
                           'main_img',
                           'published',
                           'meta_title',
                           'meta_keywords',
                           'meta_description'];

    public function views()
    {
        return $this->hasMany(PostViews::class, 'post_id', 'id');
    }
}
