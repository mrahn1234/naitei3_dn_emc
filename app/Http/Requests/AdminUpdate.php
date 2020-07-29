<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUpdate extends FormRequest
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
            'name' => 'string|max:255',
            'birthday' => 'nullable|date|before:' .date('d-m-Y'),
            'gender' => 'nullable|boolean',
            'address' => 'nullable|max:100',
            'phone' => 'nullable|numeric|regex:/^([0-9]*)$/|min:9',
            'facebook' => 'nullable',
        ];
    }
}
