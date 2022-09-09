<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
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
            'title'=>'required|min:2:max:5',
            'tags'=>'required|min:2:max:5',
            'images.*'=>'mimes:png,jpg,jpeg|max:2048'
        ];
    }
    public function messages()
    {
        return[
            'title.required'=>'Başlık Alanı Boş Olamaz',
            'title.min'=>'Başlık Alanı Min 2 Karakterde Oluşmalıdır',
            'title.max'=>'Başlık Alanı Max 255 Karakterde Oluşmalıdır',
            'tags.required'=>'Başlık Alanı Boş Olamaz',
            'tags.min'=>'Etiket Alanı Min 2 Karakterde Oluşmalıdır',
            'tags.max'=>'Etiket Alanı Max 255 Karakterde Oluşmalıdır',
            'images.*.mimes'=>'Resimler .png .jpg .jpeg Olmalıdır',
            'images.*.max'=>'Resimler Maksimum 2Mb Olmalıdır',
        ];
    }
}
