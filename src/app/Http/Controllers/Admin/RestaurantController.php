<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\RestaurantCategoryService;
use App\Services\RestaurantService;
use Illuminate\Http\Request;
use App\Http\Requests\RestaurantRequest;

class RestaurantController extends Controller
{
    private $restaurantService;
    private $restaurantCategoryService;

    public function __construct(
        RestaurantCategoryService $restaurantCategoryService,
        RestaurantService $restaurantService
    ) {
        $this->restaurantCategoryService = $restaurantCategoryService;
        $this->restaurantService = $restaurantService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        return view('admin.restaurants.catalog.index', [
            'restaurants' => $this->restaurantService->adminIndex($request),
            'categories' => $this->restaurantCategoryService->adminAll()
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function add()
    {
        return view('admin.restaurants.catalog.add', [
            'categories' => $this->restaurantCategoryService->adminAll()
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(RestaurantRequest $request)
    {
        $this->restaurantService->adminCreate($request);

        return redirect()->route('admin-restaurant');
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(int $id)
    {
        return view('admin.restaurants.catalog.edit', [
            'restaurant' => $this->restaurantService->adminGetById($id),
            'categories' => $this->restaurantCategoryService->adminAll()
        ]);
    }


    /**
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(RestaurantRequest $request, int $id)
    {
        $this->restaurantService->adminUpdate($request, $id);

        return redirect()->route('admin-restaurant');
    }


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(int $id)
    {
        $this->restaurantService->adminDelete($id);

        return redirect()->route('admin-restaurant');
    }
}
