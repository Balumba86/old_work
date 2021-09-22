<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ContactService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

/**
 * Class ContactController
 *
 * @package Petstore30\controllers
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 */
class ContactController extends Controller
{
    private $contactService;

    public function __construct(
        ContactService $contactService
    )
    {
        $this->contactService = $contactService;
    }

    /**
     * @OA\Get(
     *     path="/contacts",
     *     tags={"other"},
     *     summary="Получение списка контактов",
     *     operationId="index",
     *     @OA\Response(
     *         response=200,
     *         description="Успешный ответ",
     *         @OA\JsonContent(ref="#/components/schemas/ContactsResponse")
     *     )
     * )
     */
    public function index()
    {
        $contacts = $this->contactService->getAll();

        return ApiResponse::result($contacts);
    }
}
