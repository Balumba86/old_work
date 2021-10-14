<?php

namespace App\Services;

use App\Models\News;
use App\Models\PostViews;
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

        $news = $news->with('views')->orderBy('id', 'desc')->paginate(10);

        foreach ($news->items() as $post) {
            $post->views_count = count($post->views);
            unset($post->views);
        }

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

    // Api

    public function getList(Request $request)
    {
        $news = News::select('title', 'slug', 'main_img', 'text', 'type')->with('views')->where('published', true)->orderBy('id', 'desc')->simplePaginate(10);

        foreach ($news->items() as $post) {
            $post->main_img = Storage::url($post->main_img);
            $post->text = mb_substr(strip_tags($post->text), 0, 200);
            $post->views_count = count($post->views);
            unset($post->views);
        }

        return $news;
    }

    public function getPost(Request $request, $slug)
    {
        $post = News::select('id', 'title', 'slug', 'main_img', 'text', 'type', 'created_at', 'meta_title', 'meta_keywords', 'meta_description', 'created_at')->with('views')->where('published', true)->where('slug', $slug)->get()->first();

        if ($post) {
            $post->main_img = Storage::url($post->main_img);
            $post->views_count = count($post->views);
            $this->viewIncrement($request, $post->id);
            unset($post->id);
            unset($post->views);
        }

        return $post;
    }

    private function viewIncrement(Request $request, int $post_id)
    {
        $ip_adress = $request->server('REMOTE_ADDR');

        // Формируем дату для проверки просмотра страницы
        $date = mktime(date('H'), date('i'), 0, date("m")  , date("d"), date("Y"));
        $view_check = PostViews::where('post_id', $post_id)->where('created_at', 'like', date('Y-m-d H', $date).'%')->where('ip', $ip_adress)->get()->count();

        if ($view_check === 0) {
            $view_data = [
                'ip' => $ip_adress,
                'post_id' => $post_id
            ];
            PostViews::create($view_data);
        }
    }

    public function getForHome()
    {
        $news = News::select('title', 'slug', 'main_img', 'type')->where('published', true)->orderBy('id', 'desc')->limit(9)->get();

        foreach ($news as $post) {
            $post->main_img = Storage::url($post->main_img);
        }

        return $news;
    }
}
