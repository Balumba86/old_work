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
                'shop' => [
                    $this->shopService->countOnLevel(1),
                    $this->shopService->countOnLevel(2),
                    $this->shopService->countOnLevel(3),
                    $this->shopService->countOnLevel(4)
                ],
                'restaurant' => [
                    $this->restaurantService->countOnLevel(1),
                    $this->restaurantService->countOnLevel(2),
                    $this->restaurantService->countOnLevel(3),
                    $this->restaurantService->countOnLevel(4)
                ],
                'services' => [
                    $this->serviceItemsService->countOnLevel(1),
                    $this->serviceItemsService->countOnLevel(2),
                    $this->serviceItemsService->countOnLevel(3),
                    $this->serviceItemsService->countOnLevel(4)
                ]
            ]
        ]);
    }

}
