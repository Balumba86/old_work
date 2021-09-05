<?php

namespace App\Services;

use App\Models\ShopCategory;
use Illuminate\Http\Request;

class ShopCategoryService
{
    // WEB Admin-panel

    public function adminIndex(Request $request)
    {
        $categories = ShopCategory::query();

        $search = $request->get('search');

        if (!is_null($search)) {
            $search = trim($search);
            $categories->where('title', 'like', "%$search%");
        }

        $categories = $categories->orderBy('id', 'desc')->paginate(10);

        return $categories;
    }

    public function adminAll()
    {
        return ShopCategory::select('id', 'title')->get()->all();
    }

    public function adminCreate($data)
    {
        return ShopCategory::create($data);
    }

    public function adminGetById(int $id)
    {
        return ShopCategory::where('id', $id)->first();
    }

    public function adminUpdate($data, int $id)
    {
        $category = ShopCategory::where('id', $id)->first();

        return $category->update($data);
    }

    public function adminDelete(int $id)
    {
        $category = ShopCategory::where('id', $id)->first();

        return $category->delete();
    }

    // Api

    public function apiAll()
    {
        return ShopCategory::select('id', 'title', 'slug')->get()->all();
    }

    public function getCategoryIdBySlug($slug)
    {
        return ShopCategory::select('id')->where('slug', $slug)->get()->first();
    }
}
