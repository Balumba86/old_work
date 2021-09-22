<?php

namespace App\Services;

use App\Models\Images;
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

        $shop = Shop::create($data);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $tmp = $image->store('shop/gallery');
                Images::create([
                    'path' => $tmp,
                    'target' => 'shop',
                    'target_id' => $shop->id
                ]);
            }
        }

        return $shop;
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
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $tmp = $image->store('shop/gallery');
                Images::create([
                    'path' => $tmp,
                    'target' => 'shop',
                    'target_id' => $id
                ]);
            }
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
        $shops->select('title', 'slug', 'logo', 'category', 'level', 'point');
        $shops->where('category', $category_id);

        $search = $request->get('search');

        if (!is_null($search)) {
            $search = trim($search);
            $shops->where('title', 'like', "%$search%");
        }

        $shops = $shops->orderBy('id', 'desc')->simplePaginate(9);

        foreach ($shops->items() as $shop) {
            $shop->logo = Storage::url($shop->logo);
        }

        return $shops;
    }

    public function getList(Request $request)
    {
        $shops = Shop::query();
        $shops->with('category');
        $shops->select('title', 'slug', 'logo', 'category', 'level', 'point');

        $search = $request->get('search');

        if (!is_null($search)) {
            $search = trim($search);
            $shops->where('title', 'like', "%$search%");
        }

        $shops = $shops->orderBy('id', 'desc')->simplePaginate(9);

        foreach ($shops->items() as $shop) {
            $shop->logo = Storage::url($shop->logo);
        }

        return $shops;
    }

    public function getBySlug(string $slug)
    {
        $shop = Shop::select('id', 'title', 'slug', 'description', 'level', 'point', 'category', 'logo', 'hours_work', 'phone', 'website', 'meta_title', 'meta_keywords', 'meta_description')->with('category', 'images')->where('slug', $slug)->get()->first();

        if ($shop) {
            $shop->logo = Storage::url($shop->logo);

            foreach ($shop->images as $img) {
                $img->path = Storage::url($img->path);
            }
        }

        return $shop;
    }

    public function getForHome()
    {
        $shops = Shop::where('show_main', true)->orderBy('sort', 'asc')->select('id', 'title', 'slug', 'level', 'point', 'category', 'logo')->with('category')->limit(3)->get();

        foreach ($shops as $shop) {
            $shop->logo = Storage::url($shop->logo);
            unset($shop->id);
        }

        return $shops;
    }

    public function getByLelel(int $id)
    {
        $shops = Shop::where('level', $id)->orderBy('point', 'asc')->select('id', 'title', 'slug', 'point', 'category', 'logo')->with('category')->get();

        foreach ($shops as $shop) {
            $shop->logo = Storage::url($shop->logo);
            $shop->type = 'shop';
        }

        return $shops->toArray();
    }
}
