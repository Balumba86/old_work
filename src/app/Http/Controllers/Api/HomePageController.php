<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\MainBannerService;
use App\Services\NewsService;
use App\Services\ShopService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

/**
 * Class HomePageController
 *
 * @package Petstore30\controllers
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 */
class HomePageController extends Controller
{
    private $bannerService;
    private $shopService;
    private $newsService;

    public function __construct(
        MainBannerService $mainBannerService,
        ShopService $shopService,
        NewsService $newsService
    )
    {
        $this->bannerService = $mainBannerService;
        $this->shopService = $shopService;
        $this->newsService = $newsService;
    }

    /**
     * @OA\Get(
     *     path="/home",
     *     tags={"main"},
     *     summary="Получение информации для главной страницы",
     *     operationId="index",
     *     @OA\Response(
     *         response=200,
     *         description="Успешный ответ",
     *         @OA\JsonContent(ref="#/components/schemas/HomePageResponse")
     *     )
     * )
     */
    public function index()
    {
        $result = [
            "banners" => $this->bannerService->getForHome(),
            "shops" => $this->shopService->getForHome(),
            "news" => $this->newsService->getForHome()
        ];

        return ApiResponse::result($result);
    }
}
