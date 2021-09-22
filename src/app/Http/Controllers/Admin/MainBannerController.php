<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainBannerRequest;
use Illuminate\Http\Request;
use App\Services\MainBannerService;

class MainBannerController extends Controller
{
    private $bannerService;

    public function __construct(
        MainBannerService $mainBannerService
    )
    {
        $this->bannerService = $mainBannerService;
    }

    public function index()
    {
        $banners = $this->bannerService->adminIndex();

        return view('admin.banners.index', [
            "banners" => $banners
        ]);
    }

    public function add()
    {
        return view('admin.banners.add');
    }

    public function create(MainBannerRequest $request)
    {
        $this->bannerService->adminCreate($request);

        return redirect()->route('admin-banners');
    }

    public function edit(int $id)
    {
        return view('admin.banners.edit', [
            'banner' => $this->bannerService->adminGetById($id)
        ]);
    }

    public function update(MainBannerRequest $request, int $id)
    {
        $this->bannerService->adminUpdate($request, $id);

        return redirect()->route('admin-banners');
    }

    public function delete(int $id)
    {
        $this->bannerService->adminDelete($id);

        return redirect()->route('admin-banners');
    }
}
