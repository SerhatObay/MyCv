<?php

namespace App\Http\Controllers;

use App\Models\PersonalInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PersonalInformationController extends Controller
{
    public function index()
    {
        $information = PersonalInformation::find(1);
        return view('backend.personal_information',compact('information'));
    }
    public function update(Request $request)
    {
        $this->validate($request,
            [
                'cv'=>'mimes:pdf,doc,docx',
                'image'=>'mimes:jpg,jpeg,png',
                'title_left'=>'required',
                'title_right'=>'required'
            ],
            [
                'cv.mimes'=>'Seçilen cv yalnızca .pdf , .doc , .docx uzantılı olabilir',
                'image.mimes'=>'Seçilen resim yalnızca .jpg , .jpeg , .png uzantılı olabilir',
                'title_left.required'=>'Lütfen Eğitim Listesinin Başlığını Yazın',
                'title_right.required'=>'Lütfen Deneyim Listesinin Başlığını Yazın'
            ]);

        $information =PersonalInformation::find(1);
        if ($request->file('cv'))

        {

            $file=$request->file('cv');
            $extension=$file->getClientOriginalExtension();
            $fileOriginalName=$file->getClientOriginalName();
            $explode=explode('.',$fileOriginalName);
            $fileOriginalName=Str::slug($explode[0],'-').'-'.now()->format('d-m-Y_H-i-s').'.'.$extension;

            $file-> move(public_path('public/Cv'), $fileOriginalName);
            $information->cv='public/Cv/'.$fileOriginalName;


        }

        if ($request->file('image')){

            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $fileOriginalName=$file->getClientOriginalName();
            $explode=explode('.',$fileOriginalName);
            $fileOriginalName=Str::slug($explode[0],'-').'-'.now()->format('d-m-Y_H-i-s').'.'.$extension;

            $file-> move(public_path('public/Image'), $fileOriginalName);
            $information->image='public/Image/'.$fileOriginalName;


        }

        $information->main_title=$request->main_title;
        $information->about_text=$request->about_text;
        $information->btn_contact_text=$request->btn_contact_text;
        $information->btn_contact_link=$request->btn_contact_link;
        $information->small_title_left=$request->small_title_left;
        $information->title_left=$request->title_left;
        $information->small_title_right=$request->small_title_right;
        $information->title_right=$request->title_right;
        $information->full_name=$request->full_name;

        $information->task_name=$request->task_name;
        $information->birthday=$request->birthday;
        $information->website=$request->website;
        $information->phone=$request->phone;
        $information->mail=$request->mail;

        $information->address=$request->address;
        $information->languages=$request->lang;
        $information->interests=$request->interests;

        $information->save();
        alert()->success('Başarılı','Kişisel Bilgiler Güncellendi')->showConfirmButton('Tamam','#3885d6')->persistent(true,true);

        return redirect()->back();

    }
}
