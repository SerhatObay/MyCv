<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
            "date"=>"required|max:255",
            "task_name"=>"required|max:255",
            "company_name"=>"required|max:255",

        ];
    }
    public function messages()
    {
        return [
            'date.required'=>"Deneyim tarihi girilmesi zorunludur",
            'date.max'=>"Deneyim tarihi alanı için en fazla 255 karakter girebilirsiniz",
            'task_name.required'=>"Pozisyon adı girilmesi zorunludur",
            'task_name.max'=>"Pozisyon adı alanı için en fazla 255 karakter girebilirsiniz",
            'company_name.required'=>"Şirket adı girilmesi zorunludur",
            'company_name.max'=>"Şirket adı alanı için en fazla 255 karakter girebilirsiniz",



        ];
    }
}
