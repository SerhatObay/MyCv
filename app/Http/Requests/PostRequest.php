<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=>'required|min:2:max:255',
            'image'=>'mimes:jpeg,png,jpg|max:2048',
            'description'=>'required|',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Başlık Boş Bırakılamaz',
            'title.min'=>'Başlık En Az 2 Karakterden Oluşmalıdır',
            'title.max'=>'Başlık En Fazla 255 Karakterden Oluşmalıdır',
            'image.mimes'=>'Resimler .png .jpg .jpeg Olmalıdır',
            'image.max'=>'Seçtiğiniz Resim 2Mb den Fazladır',
            'description.required'=>'Makale Yazısı Boş Bırakılamaz'

        ];
    }
}
