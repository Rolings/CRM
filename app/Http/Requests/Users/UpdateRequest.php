<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'       => ['required', 'string', 'max:25'],
            'last_name'        => ['required', 'string', 'max:25'],
            'middle_name'      => ['required', 'string', 'max:25'],
            'email'            => ['required', 'unique:users,email'],
            'role_id'          => ['required', 'integer'],
            'phone'            => ['required', 'unique:users,phone'],
            'active'           => ['required', 'bool'],
            'notification'     => ['required', 'bool'],
            'password'         => ['sometimes', 'required_with:confirm_password'],
            'confirm_password' => ['sometimes', 'required']
        ];
    }
}
