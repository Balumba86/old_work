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

    public function show(int $id)
    {
        return view('admin.rent.show', [
            'rent' => $this->rentService->adminGetById($id)
        ]);
    }

    public function update(Request $request, int $id)
    {
        $this->rentService->adminUpdate($id);

        return back()->with('success','Заявка отмечена, как просмотренная');
    }

    public function delete(int $id)
    {
        $this->rentService->adminDelete($id);

        return redirect()->route('admin-rent');
    }
}
