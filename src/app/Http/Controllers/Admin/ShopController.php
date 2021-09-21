<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ShopService;
use App\Services\ShopCategoryService;
use Illuminate\Http\Request;
use App\Http\Requests\ShopRequest;

class ShopController extends Controller
{
    private $shopService;
    private $shopCategoryService;

    public function __construct(
        ShopService $shopService,
        ShopCategoryService $shopCategoryService
    ) {
        $this->shopService = $shopService;
        $this->shopCategoryService = $shopCategoryService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        return view('admin.shops.catalog.index', [
            'shops' => $this->shopService->adminIndex($request),
            'categories' => $this->shopCategoryService->adminAll()
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function add()
    {
        return view('admin.shops.catalog.add', [
            'categories' => $this->shopCategoryService->adminAll()
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(ShopRequest $request)
    {
        $this->shopService->adminCreate($request);

        return redirect()->route('admin-shop');
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(int $id)
    {
        return view('admin.shops.catalog.edit', [
            'shop' => $this->shopService->adminGetById($id),
            'categories' => $this->shopCategoryService->adminAll()
        ]);
    }


    /**
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ShopRequest $request, int $id)
    {
        $this->shopService->adminUpdate($request, $id);

        return redirect()->route('admin-shop');
    }


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(int $id)
    {
        $this->shopService->adminDelete($id);

        return redirect()->route('admin-shop');
    }
}
