<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ShopService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $shopService;

    public function __construct(
        ShopService $shopService
    )
    {
        $this->shopService = $shopService;
    }

    public function index()
    {
        return view('admin.dashboard', [
            'count_shops' => $this->shopService->adminCount(),
            'count_cafe' => 0,
            'count_services' => 0,
            'count_requests' => 0
        ]);
    }
}
