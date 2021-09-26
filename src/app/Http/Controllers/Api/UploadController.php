<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ImageService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    private $imageService;
    private $methods = [
        'get',
        'delete'
    ];

    public function __construct(
        ImageService $imageService
    )
    {
        $this->imageService = $imageService;
    }

    public function galleryImg(Request $request)
    {
        $data = $request->all();
        $action = $data['action'] ?? 'get';
        $type = $data['type'] ?? null;
        $id = $data['id'] ?? null;
        $image_id = $data['image_id'] ?? null;

        if (!in_array($action, $this->methods)) {
            return ApiResponse::error('method not allowed');
        }

        if ($action === 'get') {
            $images = $this->imageService->getImages($type, $id);

            return ApiResponse::result($images);
        }
        if ($action === 'delete') {
            $deleted = $this->imageService->deleteImages($type, $id, $image_id);

            if ($deleted) {
                return ApiResponse::success('Изображение успешно удалено');
            }

            return ApiResponse::error('Ошибка удаления');
        }
    }
}
