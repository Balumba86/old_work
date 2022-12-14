<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\NewsService;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;

class NewsController extends Controller
{
    private $newsService;

    public function __construct(
        NewsService $newsService
    ) {
        $this->newsService = $newsService;
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        return view('admin.news.index', [
            'news' => $this->newsService->adminIndex($request),
            'event_types' => config('enums.event_types')
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function add()
    {
        return view('admin.news.add', [
            'event_types' => config('enums.event_types')
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(NewsRequest $request)
    {
        $this->newsService->adminCreate($request);

        return redirect()->route('admin-news');
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(int $id)
    {
        return view('admin.news.edit', [
            'post' => $this->newsService->adminGetById($id),
            'event_types' => config('enums.event_types')
        ]);
    }


    /**
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(NewsRequest $request, int $id)
    {
        $this->newsService->adminUpdate($request, $id);

        return redirect()->route('admin-news');
    }


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(int $id)
    {
        $this->newsService->adminDelete($id);

        return redirect()->route('admin-news');
    }
}
