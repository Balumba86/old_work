<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ShopService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

/**
 * Class ShopController
 *
 * @package Petstore30\controllers
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 */
class ShopController extends Controller
{
    private $shopService;

    public function __construct(
        ShopService $shopService
    ) {
        $this->shopService = $shopService;
    }

    /**
     * @OA\Get(
     *     path="/shop/{shopSlug}",
     *     tags={"shop"},
     *     summary="Получение детальной информации",
     *     operationId="getItemBySlug",
     *     @OA\Parameter(
     *         name="shopSlug",
     *         description="slug магазина",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Успешный ответ",
     *         @OA\JsonContent(ref="#/components/schemas/ShopDetailResponse")
     *     )
     * )
     */
    public function getItemBySlug(string $slug)
    {
        $shop = $this->shopService->getBySlug($slug);

        if (!$shop) {
            return ApiResponse::error('Магазин не существует', 404);
        }

        return ApiResponse::result($shop);
    }
}

/**
 * @OA\Schema(
 *      schema="ShopDetailResponse",
 *      @OA\Property(
 *          property="type",
 *          type="string",
 *          default="success"
 *      ),
 *       @OA\Property(
 *            property="data",
 *            ref="#/components/schemas/ShopDetail"
 *       )
 * )
 * @OA\Schema (
 *     schema="ShopDetail",
 *     @OA\Property(
 *         property="title",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="slug",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="logo",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="hours_work",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="phone",
 *         type="string",
 *         nullable="true"
 *     ),
 *     @OA\Property(
 *         property="website",
 *         type="string",
 *         nullable="true"
 *     ),
 *     @OA\Property(
 *          property="category",
 *          ref="#/components/schemas/CategorySmall"
 *     ),
 *     @OA\Property(
 *         property="meta_title",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="meta_keywords",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="meta_description",
 *         type="string"
 *     )
 * )
 */
