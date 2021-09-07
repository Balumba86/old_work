<?php

namespace App\Services;

use App\Models\RestaurantCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RestaurantCategoryService
{
    public function adminIndex(Request $request)
    {
        $categories = RestaurantCategory::query();

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
        return RestaurantCategory::select('id', 'title')->get()->all();
    }

    public function adminCreate($data)
    {
        $data['slug'] = Str::slug($data['title']);

        return RestaurantCategory::create($data);
    }

    public function adminGetById(int $id)
    {
        return RestaurantCategory::where('id', $id)->first();
    }

    public function adminUpdate($data, int $id)
    {
        $category = RestaurantCategory::where('id', $id)->first();

        $data['slug'] = Str::slug($data['title']);

        return $category->update($data);
    }

    public function adminDelete(int $id)
    {
        $category = RestaurantCategory::where('id', $id)->first();

        return $category->delete();
    }
}
