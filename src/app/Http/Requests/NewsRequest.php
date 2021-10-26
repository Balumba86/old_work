<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewsRequest extends FormRequest
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
        $id = $this->route('id');
        return [
            'title' => [
                'required',
                'min:3',
                'max:100',
                Rule::unique('news', 'title')->ignore($id, 'id')
            ],
            'main_img' => 'nullable|dimensions:width=400,height=300|mimes:jpeg,jpg,png'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Вы не указали Заголовок',
            'title.unique' => 'Заголовок должен быть уникальным',
            'title.min' => 'Минимальная длина заголовка - 3 знака',
            'title.max' => 'Максимальная длина заголовка - 100 знаков',
            'main_img.dimensions' => 'Размер изображения обложки события должен быть 400x300 пикселей',
            'main_img.mimes' => 'Формат файла обложки события должен быть jpeg, jpg или png'
        ];
    }
}
