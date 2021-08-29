<?php

namespace App\Services;
use App\Models\News;
use Illuminate\Http\Request;

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

    public function adminCreate($data)
    {
        return News::create($data);
    }

    public function adminGetById(int $id)
    {
        return News::where('id', $id)->first();
    }

    public function adminUpdate($data, int $id)
    {
        $post = News::where('id', $id)->first();

        return $post->update($data);
    }

    public function adminDelete(int $id)
    {
        $post = News::where('id', $id)->first();

        return $post->delete();
    }
}
