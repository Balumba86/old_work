<?php

namespace App\Traits;

trait ApiResponse
{

    /**
     * @param $data
     * @return \Illuminate\Http\JsonResponse
     */
    static function result($data, $code = 200)
    {
        $result = [
            "type" => 'success',
            "data" => $data
        ];

        return response()->json($result, $code);
    }

    /**
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    static function success(string $message)
    {
        $result = [
            "result" => true,
            "message" => $message
        ];
        return response()->json($result);
    }

    /**
     * @param $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    static function error($message, int $code = 422)
    {
        if($code < 300 || $code > 599) {
            $code = 500;
        }

        $result = [
            "type" => 'error',
            "error" => [
                "code" => $code,
                "title" => "Ошибка!",
                "message" => $message
            ]
        ];

        return response()->json($result, $code);
    }

}
