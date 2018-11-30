<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
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
            'name'             => 'required|max:30',
            'latest_version'   => 'max:10',
            'title_of_ad'      => 'max:30',
            'messge_of_ad'     => 'max:256',
            'link'             => 'max:256',
            'contact_email'    => 'max:256',
            'share_format'     => 'max:256',
            'contact_format'   => 'max:256',
            'developer_site'   => 'max:256',
            'developer_name'   => 'max:30',
            'developer_apps'   => 'max:256',
            'generated_in_app' => 'max:256',

            /*'contact_email'=>'required|email'*/
        ];
    }

    public function messages()
    {

        return
            [
            'name.required' => 'Please Enter Your Application Name',

            ];
    }

    /*public function persist()
    {

        return array_merge(
            $request->all(),
        );

    }*/
}
