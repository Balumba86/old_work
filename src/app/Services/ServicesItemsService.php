<?php

namespace App\Services;

use App\Models\Images;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServicesItemsService
{
    public function adminIndex(Request $request)
    {
        $shops = Service::query();

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
            $logo_path = $request->file('logo')->store('service');
            $data['logo'] = $logo_path;
        }

        $data['slug'] = Str::slug($data['title']);

        $serviceItem = Service::create($data);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $tmp = $image->store('service/gallery');
                Images::create([
                    'path' => $tmp,
                    'target' => 'service',
                    'target_id' => $serviceItem->id
                ]);
            }
        }

        return $serviceItem;
    }

    public function adminGetById(int $id)
    {
        return Service::with('category')->where('id', $id)->first();
    }

    public function adminUpdate(Request $request, int $id)
    {
        $shop = Service::where('id', $id)->first();

        $data = $request->all();

        if ($request->file('logo')) {
            Storage::delete($data['logo']);
            $logo_path = $request->file('logo')->store('service');
            $data['logo'] = $logo_path;
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $tmp = $image->store('service/gallery');
                Images::create([
                    'path' => $tmp,
                    'target' => 'service',
                    'target_id' => $id
                ]);
            }
        }

        $data['slug'] = Str::slug($data['title']);

        return $shop->update($data);
    }

    public function adminDelete(int $id)
    {
        $shop = Service::where('id', $id)->first();

        Storage::delete($shop->logo);

        return $shop->delete();
    }

    public function adminCount():int
    {
        return Service::all()->count();
    }

    // Api

    public function getItemsByCategoryId(Request $request, $category_id)
    {
        $services = Service::query();
        $services->with('category');
        $services->select('title', 'slug', 'logo', 'category', 'level');
        $services->where('category', $category_id);

        $search = $request->get('search');

        if (!is_null($search)) {
            $search = trim($search);
            $services->where('title', 'like', "%$search%");
        }

        $services = $services->orderBy('id', 'desc')->simplePaginate(10);

        foreach ($services->items() as $service) {
            $service->logo = Storage::url($service->logo);
        }

        return $services;
    }

    public function getBySlug(string $slug)
    {
        $service = Service::select('id', 'title', 'slug', 'description', 'level', 'category', 'logo', 'hours_work', 'phone', 'website', 'meta_title', 'meta_keywords', 'meta_description')->with('category', 'images')->where('slug', $slug)->get()->first();

        if ($service) {
            $service->logo = Storage::url($service->logo);

            foreach ($service->images as $img) {
                $img->path = Storage::url($img->path);
            }
        }

        return $service;
    }
}
