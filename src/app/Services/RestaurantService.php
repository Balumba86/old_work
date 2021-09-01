<?php

namespace App\Services;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RestaurantService
{
    public function adminIndex(Request $request)
    {
        $shops = Restaurant::query();

        $search = $request->get('search');

        if (!is_null($search)) {
            $search = trim($search);
            $shops->where('title', 'like', "%$search%");
        }

        $shops = $shops->orderBy('id', 'desc')->paginate(10);

        return $shops;
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
        $shop = Restaurant::where('id', $id)->first();

        $data = $request->all();

        if ($request->file('logo')) {
            Storage::delete($data['logo']);
            $logo_path = $request->file('logo')->store('restaurant');
            $data['logo'] = $logo_path;
        }

        return $shop->update($data);
    }

    public function adminDelete(int $id)
    {
        $shop = Restaurant::where('id', $id)->first();

        return $shop->delete();
    }

    public function adminCount():int
    {
        return Restaurant::all()->count();
    }
}
