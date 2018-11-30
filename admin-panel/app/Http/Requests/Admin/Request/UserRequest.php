<?php

namespace App\Http\Requests\Admin\Request;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\ApiRequest;


class UserRequest extends ApiRequest
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
            'app_id'=>'required|exists:apps,id',
            'device_id'=>'required',
            'country'=>'required',
            'device_type'=>'required',
            'os_version'=>'required',
            'app_version'=>'required'

        ];
    }

    
}
