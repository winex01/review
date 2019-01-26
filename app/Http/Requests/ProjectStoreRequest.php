<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectStoreRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'required|min:100',
            'image' => 'required|file|mimes:jpg,jpeg,png|max:2000', #2MB
            'code' => 'required|file|mimes:zip,rar|max:50000', #50000 = 50MB
        ];
    }
}
