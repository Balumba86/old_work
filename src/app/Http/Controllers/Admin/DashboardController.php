<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\RestaurantService;
use App\Services\ServicesItemsService;
use App\Services\ShopService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $shopService;
    private $restaurantService;
    private $serviceItemsService;

    public function __construct(
        ShopService $shopService,
        RestaurantService $restaurantService,
        ServicesItemsService $serviceItemsService
    )
    {
        $this->shopService = $shopService;
        $this->restaurantService = $restaurantService;
        $this->serviceItemsService = $serviceItemsService;
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.dashboard', [
            'count_shops' => $this->shopService->adminCount(),
            'count_cafe' => $this->restaurantService->adminCount(),
            'count_services' => $this->serviceItemsService->adminCount(),
            'count_requests' => 0
        ]);
    }
}
