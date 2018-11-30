<?php

namespace App\Http\Requests\Admin\Request;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\ApiRequest;

class ApplicationCreateRequest extends ApiRequest
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
            'app_platform_id'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'app_platform_id.required'=>"Please Enter Plateform Id"

        ];
    }
}
