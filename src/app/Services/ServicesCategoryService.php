<?php

namespace App\Services;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServicesCategoryService
{
    public function adminIndex(Request $request)
    {
        $categories = ServiceCategory::query();

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
        return ServiceCategory::select('id', 'title')->get()->all();
    }

    public function adminCreate($data)
    {
        $data['slug'] = Str::slug($data['title']);

        return ServiceCategory::create($data);
    }

    public function adminGetById(int $id)
    {
        return ServiceCategory::where('id', $id)->first();
    }

    public function adminUpdate($data, int $id)
    {
        $category = ServiceCategory::where('id', $id)->first();

        $data['slug'] = Str::slug($data['title']);

        return $category->update($data);
    }

    public function adminDelete(int $id)
    {
        $category = ServiceCategory::where('id', $id)->first();

        return $category->delete();
    }

    // Api

    public function apiAll()
    {
        return ServiceCategory::select('id', 'title', 'slug')->get()->all();
    }

    public function getCategoryIdBySlug($slug)
    {
        return ServiceCategory::select('id')->where('slug', $slug)->get()->first();
    }
}
