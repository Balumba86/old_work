<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainBannerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'path' => 'nullable|dimensions:width=1600,height=900|mimes:jpeg,jpg,png'
        ];
    }

    public function messages()
    {
        return [
            'path.dimensions' => 'Размер изображения баннера должен быть 1600x900 пикселей',
            'path.mimes' => 'Формат файла баннера должен быть jpeg, jpg или png'
        ];
    }
}
