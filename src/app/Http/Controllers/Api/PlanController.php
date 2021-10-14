<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ImageService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

/**
 * Class PlanController
 *
 * @package Petstore30\controllers
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 */
class PlanController extends Controller
{
    private $imageService;

    public function __construct(
        ImageService $imageService
    )
    {
        $this->imageService = $imageService;
    }

    /**
     * @OA\Get(
     *     path="/plans",
     *     tags={"other"},
     *     summary="Получение списка изображений планов уровней ТЦ",
     *     operationId="indexPlans",
     *     @OA\Response(
     *         response=200,
     *         description="Успешный ответ",
     *         @OA\JsonContent(ref="#/components/schemas/PlanResponse")
     *     )
     * )
     */
    public function indexPlans()
    {
        $plans = $this->imageService->getImages('plan', 0);

        return ApiResponse::result([
            'images' => $plans,
            'archive' => ''
        ]);
    }
}
