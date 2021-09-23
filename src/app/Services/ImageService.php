<?php

namespace App\Services;

use App\Models\Images;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    public function getImages($type, $id)
    {
        $query = Images::query();
        $query->where('target', $type);
        $query->where('target_id', $id);
        $query->select('id as image_id', 'path');

        $result = $query->get();

        foreach ($result as $image)
        {
            $image->path = Storage::url($image->path);
        }

        return $result;
    }

    public function deleteImages($type, $id, $image_id)
    {
        $query = Images::query();
        $query->where('target', $type);
        $query->where('target_id', $id);
        $query->where('id', $image_id);

        $image = $query->get()->first();

        if ($image) {
            Storage::delete($image->path);
            return $image->delete();
        }

        return false;
    }
}
