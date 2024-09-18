<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
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
            'email'=>'required|min:10',
            'pswd'=>'required|min:8'
        ];
    }
    public function messages(){
        return[
            "email.required"=>"Email không được để trống",
            "email.min"=>"Email không được nhỏ hơn 10 ký tự",
            "pswd.required"=>"Password không được để trống",
            "pswd.min"=>"Password không được nhỏ hơn 8 ký tự"
        ];
    }
}
