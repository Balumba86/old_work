<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\RestaurantCategoryService;
use Illuminate\Http\Request;

class RestaurantCategoryController extends Controller
{
    private $restaurantCategoryService;

    public function __construct(
        RestaurantCategoryService $restaurantCategoryService
    ) {
        $this->restaurantCategoryService = $restaurantCategoryService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        return view('admin.restaurants.categories.index', [
            'categories' => $this->restaurantCategoryService->adminIndex($request)
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function add()
    {
        return view('admin.restaurants.categories.add');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        $this->restaurantCategoryService->adminCreate($request->all());

        return redirect()->route('admin-restaurant-category');
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(int $id)
    {
        return view('admin.restaurants.categories.edit', [
            'category' => $this->restaurantCategoryService->adminGetById($id)
        ]);
    }


    /**
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, int $id)
    {
        $this->restaurantCategoryService->adminUpdate($request->all(), $id);

        return redirect()->route('admin-restaurant-category');
    }


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(int $id)
    {
        $this->restaurantCategoryService->adminDelete($id);

        return redirect()->route('admin-restaurant-category');
    }
}
