<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'email',
            'name' => 'required | string'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Имя не может быть пустым',
            'name.string' => 'Только текст',
            'email.email' => 'Неправильная эл. почта',
        ];
    }
}
