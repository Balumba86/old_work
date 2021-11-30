<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\PagesService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

/**
 * Class PagesController
 *
 * @package Petstore30\controllers
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 */
class PagesController extends Controller
{
    private $pagesService;

    public function __construct(PagesService $pagesService)
    {
        $this->pagesService = $pagesService;
    }

    /**
     * @OA\Get(
     *     path="/page/{pageSlug}",
     *     tags={"page"},
     *     summary="Получение статичной страницы",
     *     operationId="getPageBySlug",
     *     @OA\Parameter(
     *         name="pageSlug",
     *         description="slug страницы",
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
    public function getPageBySlug($slug)
    {
        $page = $this->pagesService->getBySlug($slug);

        if (!$page) {
            return ApiResponse::error('Страница не найдена', 404);
        }

        return ApiResponse::result($page);
    }
}
