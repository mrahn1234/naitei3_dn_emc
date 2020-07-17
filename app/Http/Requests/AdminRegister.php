<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRegister extends FormRequest
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
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'birthday' => 'nullable|date|before:' .date('d-m-Y'),
            'gender' => 'nullable|boolean',
            'avatar' => 'nullable|image',
            'address' => 'nullable|max:100',
            'phone' => 'nullable|numeric|regex:/^([0-9]*)$/|min:9',
            'facebook' => 'nullable',
            'role' => 'nullable|boolean',
        ];
    }
}
