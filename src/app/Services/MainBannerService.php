<?php

namespace App\Services;

use App\Http\Requests\MainBannerRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\MainBanner;

class MainBannerService
{

    public function adminIndex()
    {
        $banners = MainBanner::orderBy('id', 'desc')->paginate(10);

        return $banners;
    }

    public function adminCreate(MainBannerRequest $request)
    {
        $data = $request->all();

        if ($request->file('path')) {
            $banner_path = $request->file('path')->store('banner');
            $data['path'] = $banner_path;
        }

        return MainBanner::create($data);
    }

    public function adminGetById(int $id)
    {
        $banner = MainBanner::where('id', $id)->get()->first();

        return $banner;
    }

    public function adminUpdate(MainBannerRequest $request, int $id)
    {
        $banner = MainBanner::where('id', $id)->first();
        $data = $request->all();

        if ($request->file('path')) {
            Storage::delete($banner->path);
            $banner_path = $request->file('path')->store('banner');
            $data['path'] = $banner_path;
        }

        return $banner->update($data);
    }

    public function adminDelete(int $id)
    {
        $banner = MainBanner::where('id', $id)->first();
        Storage::delete($banner->path);

        return $banner->delete();
    }
}
