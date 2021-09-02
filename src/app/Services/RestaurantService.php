<?php

namespace App\Services;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
}
