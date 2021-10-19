<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ImageService;
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

    public function index()
    {
        return view('admin.plans.index', [
            'archive' => $this->imageService->getLastArchive('plan')
        ]);
    }

    public function create(Request $request)
    {
        $this->imageService->generateArchive($request);

        return redirect()->route('admin-plans');
    }
}
