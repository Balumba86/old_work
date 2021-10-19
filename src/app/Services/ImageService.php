<?php

namespace App\Services;

use App\Models\Images;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

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

        $files = Storage::files('uploads/', $type);

        foreach ($files as $file_old) {
            Storage::delete($file_old);
        }

        $zipFile = new \PhpZip\ZipFile();

        try {
            $public_dir = '/var/www/html/storage/app/public/uploads';
            if (!file_exists($public_dir)) {
                mkdir($public_dir);
            }

            $public_dir .= '/' . $type;

            if (!file_exists($public_dir)) {
                mkdir($public_dir);
            }
            $zip_name      = "plans_" . date('d_m_Y') . ".zip";
            $zip_full_path = $public_dir . '/' . $zip_name;
            file_put_contents($zip_full_path, '', LOCK_EX);

            $file_path = public_path() . DIRECTORY_SEPARATOR . 'uploads/post';
            foreach ($result as $i => $image) {
                $file = Storage::url($image->path);
                $data = file_get_contents($file);
                $zipFile->addFromString(($i+1).'_'.date('d_m_Y').'.jpg', $data);
            }
            //$zipFile->addFromString('test.txt', 'Архив скачан с официального сайта ТЦ "Никольский"');
            $zipFile->saveAsFile($zip_full_path);
            $zipFile->close();
        } catch (\PhpZip\Exception\ZipException $e) {
            ///
        }
    }

    public function getLastArchive(string $type): array
    {
        $files = Storage::files('uploads/', $type);

        $result = [
            'link' => '',
            'size' => '',
            'name' => 'Архив не собран'
        ];

        if (count($files) > 0) {
            return [
                'link' => Storage::url($files[0]),
                'size' => self::getFilesize(Storage::size($files[0])),
                'name' => str_replace("uploads/$type/", '', $files[0])
            ];
        }

        return $result;
    }

    public function getLastArchiveLink($type): string
    {
        $files = Storage::files('uploads/', $type);

        if (count($files) > 0) {
            return Storage::url($files[0]);
        }

        return '';
    }

    private function getFilesize($filesize)
    {
        // Если размер больше 1 Кб
        if($filesize > 1024)
        {
            $filesize = ($filesize/1024);
            // Если размер файла больше Килобайта
            // то лучше отобразить его в Мегабайтах. Пересчитываем в Мб
            if($filesize > 1024)
            {
                $filesize = ($filesize/1024);
                // А уж если файл больше 1 Мегабайта, то проверяем
                // Не больше ли он 1 Гигабайта
                if($filesize > 1024)
                {
                    $filesize = ($filesize/1024);
                    $filesize = round($filesize, 1);
                    return $filesize." ГБ";
                }
                else
                {
                    $filesize = round($filesize, 1);
                    return $filesize." MБ";
                }
            }
            else
            {
                $filesize = round($filesize, 1);
                return $filesize." Кб";
            }
        }
        else
        {
            $filesize = round($filesize, 1);
            return $filesize." байт";
        }
    }
}
