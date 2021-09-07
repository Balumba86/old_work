<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\RestaurantService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

/**
 * Class RestaurantController
 *
 * @package Petstore30\controllers
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 */
class RestaurantController extends Controller
{
    private $restaurantService;

    public function __construct(
        RestaurantService $restaurantService
    ) {
        $this->restaurantService = $restaurantService;
    }

    /**
     * @OA\Get(
     *     path="/restaurant/{restaurantSlug}",
     *     tags={"restaurant"},
     *     summary="Получение детальной информации",
     *     operationId="getItemBySlug",
     *     @OA\Parameter(
     *         name="restaurantSlug",
     *         description="slug кафе/ресторана",
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
        $restaurant = $this->restaurantService->getBySlug($slug);

        if (!$restaurant) {
            return ApiResponse::error('Заведение не существует', 404);
        }

        return ApiResponse::result($restaurant);
    }
}
