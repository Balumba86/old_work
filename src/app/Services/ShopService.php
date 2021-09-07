<?php

namespace App\Services;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ShopService
{
    public function adminIndex(Request $request)
    {
        $shops = Shop::query();

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
            $logo_path = $request->file('logo')->store('shop');
            $data['logo'] = $logo_path;
        }

        $data['slug'] = Str::slug($data['title']);

        return Shop::create($data);
    }

    public function adminGetById(int $id)
    {
        return Shop::with('category')->where('id', $id)->first();
    }

    public function adminUpdate(Request $request, int $id)
    {
        $shop = Shop::where('id', $id)->first();

        $data = $request->all();

        if ($request->file('logo')) {
            Storage::delete($data['logo']);
            $logo_path = $request->file('logo')->store('shop');
            $data['logo'] = $logo_path;
        }

        $data['slug'] = Str::slug($data['title']);

        return $shop->update($data);
    }

    public function adminDelete(int $id)
    {
        $shop = Shop::where('id', $id)->first();

        Storage::delete($shop->logo);

        return $shop->delete();
    }

    public function adminCount():int
    {
        return Shop::all()->count();
    }

    // Api

    public function getItemsByCategoryId(Request $request, $category_id)
    {
        $shops = Shop::query();
        $shops->with('category');
        $shops->select('title', 'slug', 'logo', 'category');
        $shops->where('category', $category_id);

        $search = $request->get('search');

        if (!is_null($search)) {
            $search = trim($search);
            $shops->where('title', 'like', "%$search%");
        }

        $shops = $shops->orderBy('id', 'desc')->simplePaginate(10);

        foreach ($shops->items() as $shop) {
            $shop->logo = Storage::url($shop->logo);
        }

        return $shops;
    }

    public function getBySlug(string $slug)
    {
        $shop = Shop::select('title', 'slug', 'description', 'category', 'logo', 'hours_work', 'phone', 'website', 'meta_title', 'meta_keywords', 'meta_description')->with('category')->where('slug', $slug)->get()->first();

        if ($shop) {
            $shop->logo = Storage::url($shop->logo);
        }

        return $shop;
    }
}
