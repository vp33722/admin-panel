<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
        $id = Auth::user()->id;

        $rules = [

            'name'  => 'required',
            'email' => 'required|unique:users,email,' .$id,
        ];

        $rules = array_merge($rules, [
            'password'         => 'nullable',
            'new-password'     => 'required_with:password',
            'confirm-password' => 'required_with:new-password|same:new-password',
        ]);

        return $rules;
    }

}
