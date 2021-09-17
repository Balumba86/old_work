<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResidentEntityRequest extends FormRequest
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
            'title' => 'required|min:3|max:100',
            'logo' => 'nullable|dimensions:width=400,height=300|mimes:jpeg,jpg,png',
            'images.*' => 'nullable|dimensions:width=1024,height=768|mimes:jpeg,jpg,png',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Вы не указали Название',
            'title.min' => 'Минимальная длина названия - 3 знака',
            'title.max' => 'Максимальная длина названия - 100 знаков',
            'logo.dimensions' => 'Размер изображения логотипа должен быть 400x300 пикселей',
            'logo.mimes' => 'Формат файла логотипа должен быть jpeg, jpg или png',
            'images.*.dimensions' => 'Размеры изображений для галлереи должны быть 1024x768 пикселей',
            'images.*.mimes' => 'Формат файла для галлереи должен быть jpeg, jpg или png',
        ];
    }
}
