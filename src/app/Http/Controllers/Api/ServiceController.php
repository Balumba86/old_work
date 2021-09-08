<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ServicesItemsService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

/**
 * Class ServiceController
 *
 * @package Petstore30\controllers
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 */
class ServiceController extends Controller
{
    private $serviceItemsService;

    public function __construct(
        ServicesItemsService $serviceItemsService
    ) {
        $this->serviceItemsService = $serviceItemsService;
    }

    /**
     * @OA\Get(
     *     path="/service/{shopSlug}",
     *     tags={"service"},
     *     summary="Получение детальной информации",
     *     operationId="getItemBySlug",
     *     @OA\Parameter(
     *         name="shopSlug",
     *         description="slug сервиса/услуги",
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
        $service = $this->serviceItemsService->getBySlug($slug);

        if (!$service) {
            return ApiResponse::error('Сервис не существует', 404);
        }

        return ApiResponse::result($service);
    }
}
