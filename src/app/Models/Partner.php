<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Partner
 *
 * @package Petstore30
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 *
 * @OA\Schema(
 *     title="Модель партнёра",
 *     description="Модель партнёра",
 * )
 */

class Partner extends Model
{
    use HasFactory;

    /**
     * @OA\Property(
     *     description="Название партнёра",
     *     title="Название",
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @OA\Property(
     *     description="Логотип партнёра",
     *     title="Логотип",
     * )
     *
     * @var string
     */
    private $logo;

    /**
     * @OA\Property(
     *     description="Описание партнёра",
     *     title="Описание",
     * )
     *
     * @var string
     */
    private $description;

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
        'name',
        'logo',
        'description',
        'show_main',
        'sort'
    ];
}
