<?php

namespace App\Services;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryService
{
    public function adminIndex()
    {
        $items = Gallery::orderBy('id', 'desc')->paginate(10);

        foreach ($items->items() as $item) {
            if ($item->type === 'pic') {
                $item->path = Storage::url($item->path);
            }
        }

        return $items;
    }

    public function adminCreate(Request $request)
    {
        $data = $request->all();

        $new_data = [
            'type' => 'video',
            'path' => $data['link'],
            'alt' => $data['alt']
        ];

        if ($request->file('image')) {
            $logo_path = $request->file('image')->store('gallery');
            $new_data['path'] = $logo_path;
            $new_data['type'] = 'pic';
        }

        return Gallery::create($new_data);
    }

    public function adminDelete(int $id)
    {
        $item = Gallery::where('id', $id)->first();

        return $item->delete();
    }

    //Api

    public function getList()
    {
        return Gallery::orderBy('id', 'desc')->simplePaginate(9);
    }
}
