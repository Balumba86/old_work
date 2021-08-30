<?php

namespace App\Services;

use App\Models\ShopCategory;
use Illuminate\Http\Request;

class ShopCategoryService
{
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
}
