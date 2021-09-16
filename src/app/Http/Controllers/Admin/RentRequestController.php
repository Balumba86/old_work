<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\RentRequestService;
use Illuminate\Http\Request;

class RentRequestController extends Controller
{
    private $rentService;

    public function __construct(
        RentRequestService $rentRequestService
    )
    {
        $this->rentService = $rentRequestService;
    }

    public function index(Request $request)
    {
        return view('admin.rent.index', [
            'rents' => $this->rentService->adminIndex($request)
        ]);
    }
}
