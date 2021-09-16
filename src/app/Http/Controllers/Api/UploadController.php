<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadShopImg(Request $request, $id = null)
    {
        dd($request->file('content'));
        return ApiResponse::result([
            'id' => $id
        ]);
    }
}
