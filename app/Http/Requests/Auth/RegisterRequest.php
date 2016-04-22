<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\Request;

class RegisterRequest extends Request
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
            'first_name' => 'required|max:100',
            'last_name'  => 'required|max:100',
            'month'      => 'required',
            'day'        => 'required',
            'year'       => 'required',
            'school_id'  => 'required|exists:schools,id',
            'gender_id'  => 'required|exists:genders,id',
            'email'      => 'required|email|max:255|unique:users',
            'password'   => 'required|min:6|confirmed',
        ];
    }
}
