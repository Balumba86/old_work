<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ImageService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    private $imageService;

    public function __construct(
        ImageService $imageService
    )
    {
        $this->imageService = $imageService;
    }


    public function indexPlans()
    {
        $plans = $this->imageService->getImages('plan', 0);

        return ApiResponse::result([
            'images' => $plans
        ]);
    }
}
