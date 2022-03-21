<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CurRequest extends FormRequest
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
            'count' => 'required | numeric'
        ];
    }

    public function messages()
    {
        return [
            'count.required' => 'Поле обязательное для заполнения',
            'count.numeric' => 'Числовое поле'
        ];
    }
}
