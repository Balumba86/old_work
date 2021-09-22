<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\RestaurantService;
use App\Services\ServicesItemsService;
use App\Services\ShopService;
use App\Traits\ApiResponse;

/**
 * Class LevelController
 *
 * @package Petstore30\controllers
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 */
class LevelController extends Controller
{
    private $shopService;
    private $restaurantService;
    private $serviceItemsService;

    public function __construct(
        ShopService $shopService,
        RestaurantService $restaurantService,
        ServicesItemsService $serviceItemsService
    )
    {
        $this->shopService = $shopService;
        $this->restaurantService = $restaurantService;
        $this->serviceItemsService = $serviceItemsService;
    }

    /**
     * @OA\Get(
     *     path="/level/{id}",
     *     tags={"other"},
     *     summary="Получение списка сущностей по номеру уровня ТЦ",
     *     operationId="indexLevel",
     *     @OA\Parameter(
     *         name="id",
     *         description="Номер уровня",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Успешный ответ",
     *         @OA\JsonContent(ref="#/components/schemas/LevelResponse")
     *     )
     * )
     */
    public function indexLevel(int $id)
    {
        $shops = $this->shopService->getByLelel($id);
        $restaurants = $this->restaurantService->getByLelel($id);
        $services = $this->serviceItemsService->getByLelel($id);

        $result = [];
        $result = array_merge($result, $shops, $restaurants, $services);

        return ApiResponse::result($result);
    }
}
