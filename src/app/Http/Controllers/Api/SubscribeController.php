<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\EmailService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

/**
 * Class SubscribeController
 *
 * @package Petstore30\controllers
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 */
class SubscribeController extends Controller
{
    private $emailService;

    public function __construct(
        EmailService $emailService
    )
    {
        $this->emailService = $emailService;
    }

    /**
     * @OA\Post(
     *     path="/system/email/subscribe",
     *     tags={"system"},
     *     summary="Подписка на Email-рассылку",
     *     requestBody={"$ref": "#/components/requestBodies/SubscribeEmail"},
     *     @OA\Response(
     *         response=200,
     *         description="Успешно",
     *         @OA\JsonContent(ref="#/components/schemas/SubscribeResponse")
     *     )
     * )
     */

    public function subscribe(Request $request)
    {
        $this->emailService->subscribeEmail($request);

        return ApiResponse::success('Вы успешно подписались на нашу рассылку!');
    }
}
