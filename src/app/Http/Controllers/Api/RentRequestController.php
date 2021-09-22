<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\RentRequestService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

/**
 * Class RentRequestController
 *
 * @package Petstore30\controllers
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 */
class RentRequestController extends Controller
{
    private $rentService;

    public function __construct(
        RentRequestService $rentRequestService
    )
    {
        $this->rentService = $rentRequestService;
    }

    /**
     * @OA\Post(
     *     path="/system/rent",
     *     tags={"system"},
     *     summary="Подача заявки на аренду",
     *     requestBody={"$ref": "#/components/requestBodies/RentRequest"},
     *     @OA\Response(
     *         response=200,
     *         description="Успешно",
     *         @OA\JsonContent(ref="#/components/schemas/SubscribeResponse")
     *     )
     * )
     */
    public function request(Request $request)
    {
        $this->rentService->rentRequest($request);

        return ApiResponse::success('Ваша заявка успешно принята!');
    }
}
