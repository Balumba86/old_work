<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\RestaurantService;
use App\Services\ShopService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $shopService;
    private $restaurantService;

    public function __construct(
        ShopService $shopService,
        RestaurantService $restaurantService
    )
    {
        $this->shopService = $shopService;
        $this->restaurantService = $restaurantService;
    }

    public function index()
    {
        return view('admin.dashboard', [
            'count_shops' => $this->shopService->adminCount(),
            'count_cafe' => $this->restaurantService->adminCount(),
            'count_services' => 0,
            'count_requests' => 0
        ]);
    }
}
