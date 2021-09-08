<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ServicesCategoryService;
use App\Services\ServicesItemsService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

/**
 * Class ServiceCategoryController
 *
 * @package Petstore30\controllers
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 */
class ServiceCategoryController extends Controller
{
    private $servicesCategoryService;
    private $serviceItemsService;

    public function __construct(
        ServicesCategoryService $servicesCategoryService,
        ServicesItemsService $serviceItemsService
    ) {
        $this->servicesCategoryService = $servicesCategoryService;
        $this->serviceItemsService = $serviceItemsService;
    }

    /**
     * @OA\Get(
     *     path="/service/categories",
     *     tags={"service"},
     *     summary="Получение списка категорий сервисов/услуг",
     *     operationId="index",
     *     @OA\Response(
     *         response=200,
     *         description="Успешный ответ",
     *         @OA\JsonContent(ref="#/components/schemas/CategoryListResponse")
     *     )
     * )
     */
    public function index()
    {
        $categories = $this->servicesCategoryService->apiAll();

        return ApiResponse::result($categories);
    }

    /**
     * @OA\Get(
     *     path="/service/category/{categorySlug}",
     *     tags={"service"},
     *     summary="Получение списка сервисов в категории",
     *     operationId="categoryItems",
     *     @OA\Parameter(
     *         name="categorySlug",
     *         description="slug запрашиваемой категории",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="search",
     *         in="query",
     *         description="Поиск по названию сервиса/услуги в категории",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="Номер запрашиваемой страницы",
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Успешный ответ",
     *         @OA\JsonContent(ref="#/components/schemas/CategoryItemDetailResponse")
     *     )
     * )
     */
    public function categoryItems(Request $request, $slug)
    {
        $category = $this->servicesCategoryService->getCategoryIdBySlug($slug);

        if (!$category) {
            return ApiResponse::error('Категория не найдена', 404);
        }

        $result = $this->serviceItemsService->getItemsByCategoryId($request, $category->id);

        return ApiResponse::result($result);
    }
}
