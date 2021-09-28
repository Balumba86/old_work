<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmailSubscribeRequest extends FormRequest
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
            'email' => 'required|email',
            'accept' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'E-mail обязателен для заполнения',
            'email.email' => 'Неверный формат электронной почты',
            'accept.required' => 'Обязательно указание подтверждения обработки персональных данных',
            'accept.boolean' => 'Поле Accept должно быть булево',
        ];
    }
}
