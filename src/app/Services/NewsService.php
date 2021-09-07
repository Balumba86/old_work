<?php

namespace App\Services;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsService
{
    public function adminIndex(Request $request)
    {
        $news = News::query();

        $search = $request->get('search');

        if (!is_null($search)) {
            $search = trim($search);
            $news->where('title', 'like', "%$search%");
        }

        $news = $news->orderBy('id', 'desc')->paginate(10);

        return $news;
    }

    public function adminCreate(Request $request)
    {
        $data = $request->all();

        if ($request->file('main_img')) {
            $logo_path = $request->file('main_img')->store('news');
            $data['main_img'] = $logo_path;
        }

        $data['slug'] = Str::slug($data['title']);

        return News::create($data);
    }

    public function adminGetById(int $id)
    {
        return News::where('id', $id)->first();
    }

    public function adminUpdate(Request $request, int $id)
    {
        $post = News::where('id', $id)->first();

        $data = $request->all();

        if ($request->file('main_img')) {
            Storage::delete($data['main_img']);
            $logo_path = $request->file('main_img')->store('news');
            $data['main_img'] = $logo_path;
        }

        $data['slug'] = Str::slug($data['title']);

        return $post->update($data);
    }

    public function adminDelete(int $id)
    {
        $post = News::where('id', $id)->first();

        Storage::delete($post->main_img);

        return $post->delete();
    }
}
