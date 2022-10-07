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
           'portfolioTitle' => 'required|min:2:max:255',
           'tags'=>'required|min:2:max:255',
           'images.*'=>'image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'portfolioTitle.required'=>'Başlık Boş Bırakılamaz',
            'portfolioTitle.min'=>'Başlık En Az 2 Karakterden Oluşmalıdır',
            'portfolioTitle.max'=>'Başlık En Fazla 255 Karakterden Oluşmalıdır',
            'tags.required'=>'Başlık Boş Bırakılamaz',
            'tags.min'=>'Başlık En Az 2 Karakterden Oluşmalıdır',
            'tags.max'=>'Başlık En Fazla 255 Karakterden Oluşmalıdır',
            'images.*.mimes'=>'Resimler .png .jpg .jpeg Olmalıdır',
            'images.*.max'=>'Seçtiğiniz Resim 2Mb den Fazladır',


        ];
    }
}
