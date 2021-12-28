<?php

namespace App\Services;

use App\Models\Pages;
use Illuminate\Http\Request;

class PagesService
{
    public function adminIndex()
    {
        $pages = Pages::orderBy('id', 'desc')->paginate(10);

        return $pages;
    }

    public function adminCreate(Request $request)
    {
        $data = $request->all();

        return Pages::create($data);
    }

    public function adminGetById(int $id)
    {
        return Pages::where('id', $id)->first();
    }

    public function adminUpdate(Request $request, int $id)
    {
        $page = Pages::where('id', $id)->first();

        $data = $request->all();

        return $page->update($data);
    }

    public function adminDelete(int $id)
    {
        $page = Pages::where('id', $id)->first();

        return $page->delete();
    }

    // Api

    public function getBySlug(string $slug)
    {
        $page = Pages::where('slug', $slug)->first();

        return $page;
    }
}
