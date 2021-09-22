<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\JobService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

/**
 * Class JobController
 *
 * @package Petstore30\controllers
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 */
class JobController extends Controller
{
    private $jobService;

    public function __construct(
        JobService $jobService
    )
    {
        $this->jobService = $jobService;
    }

    /**
     * @OA\Get(
     *     path="/opening-jobs",
     *     tags={"other"},
     *     summary="Получение списка вакансий",
     *     operationId="indexJobs",
     *     @OA\Response(
     *         response=200,
     *         description="Успешный ответ",
     *         @OA\JsonContent(ref="#/components/schemas/JobsResponse")
     *     )
     * )
     */
    public function indexJobs()
    {
        $jobs = $this->jobService->getList();

        return ApiResponse::result($jobs);
    }
}
