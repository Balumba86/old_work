<?php

namespace App\Services;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RestaurantService
{
    public function adminIndex(Request $request)
    {
        $restaurants = Restaurant::query();

        $search = $request->get('search');

        if (!is_null($search)) {
            $search = trim($search);
            $restaurants->where('title', 'like', "%$search%");
        }

        $restaurants = $restaurants->orderBy('id', 'desc')->paginate(10);

        return $restaurants;
    }

    public function adminCreate(Request $request)
    {
        $data = $request->all();

        if ($request->file('logo')) {
            $logo_path = $request->file('logo')->store('restaurant');
            $data['logo'] = $logo_path;
        }

        $data['slug'] = Str::slug($data['title']);

        return Restaurant::create($data);
    }

    public function adminGetById(int $id)
    {
        return Restaurant::with('category')->where('id', $id)->first();
    }

    public function adminUpdate(Request $request, int $id)
    {
        $restaurant = Restaurant::where('id', $id)->first();

        $data = $request->all();

        if ($request->file('logo')) {
            Storage::delete($data['logo']);
            $logo_path = $request->file('logo')->store('restaurant');
            $data['logo'] = $logo_path;
        }

        $data['slug'] = Str::slug($data['title']);

        return $restaurant->update($data);
    }

    public function adminDelete(int $id)
    {
        $restaurant = Restaurant::where('id', $id)->first();

        Storage::delete($restaurant->logo);

        return $restaurant->delete();
    }

    public function adminCount():int
    {
        return Restaurant::all()->count();
    }

    // Api

    public function getItemsByCategoryId(Request $request, $category_id)
    {
        $restaurants = Restaurant::query();
        $restaurants->with('category');
        $restaurants->select('title', 'slug', 'logo', 'category', 'level');
        $restaurants->where('category', $category_id);

        $search = $request->get('search');

        if (!is_null($search)) {
            $search = trim($search);
            $restaurants->where('title', 'like', "%$search%");
        }

        $restaurants = $restaurants->orderBy('id', 'desc')->simplePaginate(10);

        foreach ($restaurants->items() as $restaurant) {
            $restaurant->logo = Storage::url($restaurant->logo);
        }

        return $restaurants;
    }

    public function getBySlug(string $slug)
    {
        $restaurant = Restaurant::select('title', 'slug', 'description', 'level', 'category', 'logo', 'hours_work', 'phone', 'website', 'meta_title', 'meta_keywords', 'meta_description')->with('category')->where('slug', $slug)->get()->first();

        if ($restaurant) {
            $restaurant->logo = Storage::url($restaurant->logo);
        }

        return $restaurant;
    }
}
