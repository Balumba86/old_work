<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\NewsService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

/**
 * Class NewsController
 *
 * @package Petstore30\controllers
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 */
class NewsController extends Controller
{
    private $newsService;

    public function __construct(
        NewsService $newsService
    )
    {
        $this->newsService = $newsService;
    }

    /**
     * @OA\Get(
     *     path="/news/list",
     *     tags={"news"},
     *     summary="Получение списка новостей",
     *     operationId="index",
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
     *         @OA\JsonContent(ref="#/components/schemas/NewsListResponse")
     *     )
     * )
     */
    public function index(Request $request)
    {
        $news = $this->newsService->getList($request);

        return ApiResponse::result($news);
    }

    /**
     * @OA\Get(
     *     path="/news/{postSlug}",
     *     tags={"news"},
     *     summary="Получение детальной публикации",
     *     operationId="getPostBySlug",
     *     @OA\Parameter(
     *         name="postSlug",
     *         description="slug поста",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Успешный ответ",
     *         @OA\JsonContent(ref="#/components/schemas/PostResponse")
     *     )
     * )
     */
    public function getPostBySlug(Request $request, $slug)
    {
        $post = $this->newsService->getPost($request, $slug);

        if (!$post) {
            return ApiResponse::error('Статья не найдена', 404);
        }

        return ApiResponse::result($post);
    }
}
