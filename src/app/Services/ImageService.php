<?php

namespace App\Services;

use App\Models\Images;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use ZipArchive;

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

    public function uploadNew(Request $request)
    {
        if ($request->hasFile('image')) {
            $type = $request->get('type');
            $path = $type ?: 'email';
            $image = $request->file('image');
            $tmp = $image->store("$path");

            Images::create([
                "target" => $path,
                "target_id" => 0,
                "path" => $tmp
            ]);

            return Storage::url($tmp);
        }

        return false;
    }

    public function generateArchive(Request $request)
    {
        $type = $request->get('type');

        $query = Images::query();
        $query->where('target', $type);
        $query->where('target_id', 0);
        $query->select('id as image_id', 'path');

        $result = $query->get();

        $zip = new ZipArchive();
        $zip_name = "plans_" . date('dd_mm_YYYY') . ".zip";
        $zip_full_path = 'storage/uploads/' . $type . '/'.$zip_name;

        if ($zip->open($zip_full_path, ZipArchive::CREATE) === TRUE) {
            foreach ($result as $i => $image) {
                $file = Storage::url($image->path);
                $zip->addFile($i.".jpg", $file);
            }
            $zip->close();
        }




    }
}
