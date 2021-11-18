<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'account_type' => 'required|string',
            'company_name' => 'required|string',
            'adresse' => 'required|string|min:3',
            'city' => 'required|exists:cities,name',
            'postal' => 'required|string|min:3|max:7',
            'civility' => 'required|string',
            'first_name' => 'required|string|between:2,100',
            'last_name' => 'required|string|between:2,100',
            'code_phone' => 'required|string|between:2,5',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|string|email|confirmed|max:100|unique:users,email',
            'password' => 'required|regex:/^(?=.*[A-Za-z])(?=.*\\d)[A-Za-z\\d]{6,}$/|confirmed',
        ];
    }
    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'company_url' => 'site internet',
        ];
    }
}
