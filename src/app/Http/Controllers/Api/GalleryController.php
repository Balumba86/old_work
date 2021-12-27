<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\GalleryService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

/**
 * Class GalleryController
 *
 * @package Petstore30\controllers
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 */
class GalleryController extends Controller
{
    private $galleryService;

    public function __construct(
        GalleryService $galleryService
    )
    {
        $this->galleryService = $galleryService;
    }

    /**
     * @OA\Get(
     *     path="/gallery",
     *     tags={"other"},
     *     summary="Получение галлереи ТЦ",
     *     operationId="gallaryList",
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
     *         @OA\JsonContent(ref="#/components/schemas/GalleryResponse")
     *     )
     * )
     */
    public function gallaryList()
    {
        return ApiResponse::result($this->galleryService->getList());
    }
}
