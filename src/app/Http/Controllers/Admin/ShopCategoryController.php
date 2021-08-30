<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ShopCategoryService;

class ShopCategoryController extends Controller
{
    private $shopCategoryService;

    public function __construct(
        ShopCategoryService $shopCategoryService
    ) {
        $this->shopCategoryService = $shopCategoryService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        return view('admin.shops.categories.index', [
            'categories' => $this->shopCategoryService->adminIndex($request)
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function add()
    {
        return view('admin.shops.categories.add');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        $this->shopCategoryService->adminCreate($request->all());

        return redirect()->route('admin-shop-category');
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(int $id)
    {
        return view('admin.shops.categories.edit', [
            'category' => $this->shopCategoryService->adminGetById($id)
        ]);
    }


    /**
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, int $id)
    {
        $this->shopCategoryService->adminUpdate($request->all(), $id);

        return redirect()->route('admin-shop-category');
    }


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(int $id)
    {
        $this->shopCategoryService->adminDelete($id);

        return redirect()->route('admin-shop-category');
    }
}
