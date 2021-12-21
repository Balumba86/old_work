<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\GalleryService;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    private $galleryService;

    public function __construct(
        GalleryService $galleryService
    )
    {
        $this->galleryService = $galleryService;
    }

    public function index()
    {
        return view('admin.gallery.index', [
            'items' => $this->galleryService->adminIndex()
        ]);
    }

    public function add()
    {
        return view('admin.gallery.add');
    }

    public function create(Request $request)
    {
        $this->galleryService->adminCreate($request);

        return redirect()->route('admin-gallery');
    }

    public function delete(int $id)
    {
        $this->galleryService->adminDelete($id);

        return redirect()->route('admin-gallery');
    }
}
