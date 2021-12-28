<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\PagesService;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    private $pagesService;

    public function __construct(PagesService $pagesService)
    {
        $this->pagesService = $pagesService;
    }

    public function index()
    {
        $pages = $this->pagesService->adminIndex();

        return view('admin.pages.index', [
            "pages" => $pages
        ]);
    }

    public function add()
    {
        return view('admin.pages.add');
    }

    public function create(Request $request)
    {
        $this->pagesService->adminCreate($request);

        return redirect()->route('admin-pages');
    }

    public function edit(int $id)
    {
        return view('admin.pages.edit', [
            'page' => $this->pagesService->adminGetById($id)
        ]);
    }

    public function update(Request $request, int $id)
    {
        $this->pagesService->adminUpdate($request, $id);

        return redirect()->route('admin-pages');
    }

    public function delete(int $id)
    {
        $this->pagesService->adminDelete($id);

        return redirect()->route('admin-pages');
    }
}
