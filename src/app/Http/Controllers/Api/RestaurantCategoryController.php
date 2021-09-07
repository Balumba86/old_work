<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\RestaurantCategoryService;
use App\Services\RestaurantService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

/**
 * Class RestaurantCategoryController
 *
 * @package Petstore30\controllers
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 */
class RestaurantCategoryController extends Controller
{
    private $restaurantCategoryService;
    private $restaurantService;

    public function __construct(
        RestaurantCategoryService $restaurantCategoryService,
        RestaurantService $restaurantService
    ) {
        $this->restaurantCategoryService = $restaurantCategoryService;
        $this->restaurantService = $restaurantService;
    }

    /**
     * @OA\Get(
     *     path="/restaurant/categories",
     *     tags={"restaurant"},
     *     summary="Получение списка категорий кафе/ресторанов",
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
        $categories = $this->restaurantCategoryService->apiAll();

        return ApiResponse::result($categories);
    }

    /**
     * @OA\Get(
     *     path="/restaurant/category/{categorySlug}",
     *     tags={"restaurant"},
     *     summary="Получение списка кафе/ресторанов в категории",
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
     *         description="Поиск по названию заведения в категории",
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
        $category = $this->restaurantCategoryService->getCategoryIdBySlug($slug);

        if (!$category) {
            return ApiResponse::error('Категория не найдена', 404);
        }

        $result = $this->restaurantService->getItemsByCategoryId($request, $category->id);

        return ApiResponse::result($result);
    }
}
