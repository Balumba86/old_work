<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\RentRequestService;
use App\Services\RestaurantService;
use App\Services\ServicesItemsService;
use App\Services\ShopService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $shopService;
    private $restaurantService;
    private $serviceItemsService;
    private $rentService;

    public function __construct(
        ShopService $shopService,
        RestaurantService $restaurantService,
        ServicesItemsService $serviceItemsService,
        RentRequestService $rentService
    )
    {
        $this->shopService = $shopService;
        $this->restaurantService = $restaurantService;
        $this->serviceItemsService = $serviceItemsService;
        $this->rentService = $rentService;
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.dashboard', [
            'count_shops' => $this->shopService->adminCount(),
            'count_cafe' => $this->restaurantService->adminCount(),
            'count_services' => $this->serviceItemsService->adminCount(),
            'count_requests' => $this->rentService->adminCount(),
            'residents_levels' => [
                self::countEntityOnLevel(1),
                self::countEntityOnLevel(2),
                self::countEntityOnLevel(3),
                self::countEntityOnLevel(4)
            ]
        ]);
    }

    private function countEntityOnLevel(int $level): int
    {
        $shops = $this->shopService->countOnLevel($level);
        $restaurants = $this->restaurantService->countOnLevel($level);
        $services = $this->serviceItemsService->countOnLevel($level);

        return ($shops + $restaurants + $services);
    }
}
