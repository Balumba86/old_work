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
     *         @OA\JsonContent(ref="#/components/schemas/ItemDetailResponse")
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
