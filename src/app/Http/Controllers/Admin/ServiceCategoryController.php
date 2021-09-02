<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ServicesCategoryService;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    private $servicesCategoryService;

    public function __construct(
        ServicesCategoryService $servicesCategoryService
    ) {
        $this->servicesCategoryService = $servicesCategoryService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        return view('admin.services.categories.index', [
            'categories' => $this->servicesCategoryService->adminIndex($request)
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function add()
    {
        return view('admin.services.categories.add');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        $this->servicesCategoryService->adminCreate($request->all());

        return redirect()->route('admin-service-category');
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(int $id)
    {
        return view('admin.services.categories.edit', [
            'category' => $this->servicesCategoryService->adminGetById($id)
        ]);
    }


    /**
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, int $id)
    {
        $this->servicesCategoryService->adminUpdate($request->all(), $id);

        return redirect()->route('admin-service-category');
    }


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(int $id)
    {
        $this->servicesCategoryService->adminDelete($id);

        return redirect()->route('admin-service-category');
    }
}
