<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ServicesCategoryService;
use App\Services\ServicesItemsService;
use Illuminate\Http\Request;
use App\Http\Requests\ResidentEntityRequest;

class ServiceController extends Controller
{
    private $serviceItemsService;
    private $serviceCategoryService;

    public function __construct(
        ServicesCategoryService $servicesCategoryService,
        ServicesItemsService $serviceItemsService
    ) {
        $this->serviceItemsService = $serviceItemsService;
        $this->serviceCategoryService = $servicesCategoryService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        return view('admin.services.catalog.index', [
            'services' => $this->serviceItemsService->adminIndex($request),
            'categories' => $this->serviceCategoryService->adminAll()
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function add()
    {
        return view('admin.services.catalog.add', [
            'categories' => $this->serviceCategoryService->adminAll()
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(ResidentEntityRequest $request)
    {
        $this->serviceItemsService->adminCreate($request);

        return redirect()->route('admin-service');
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(int $id)
    {
        return view('admin.services.catalog.edit', [
            'service' => $this->serviceItemsService->adminGetById($id),
            'categories' => $this->serviceCategoryService->adminAll()
        ]);
    }


    /**
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ResidentEntityRequest $request, int $id)
    {
        $this->serviceItemsService->adminUpdate($request, $id);

        return redirect()->route('admin-service');
    }


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(int $id)
    {
        $this->serviceItemsService->adminDelete($id);

        return redirect()->route('admin-service');
    }
}
