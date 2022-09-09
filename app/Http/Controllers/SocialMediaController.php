<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function list()
    {
        $list=SocialMedia::all();
        return view('backend.social_media_list',compact('list'));
    }

    public function addShow(Request $request)
    {
        $socialMedia=null;
        $socialMediaID=$request->socialMediaID;
        if ($socialMediaID)
        {
            $socialMedia=SocialMedia::find($socialMediaID);

        }
        return view('backend.social_media_add',compact('socialMedia'));
    }

    public function add(Request $request)
    {

        $data=[
                'name'=>$request->name,
                'link'=>$request->link,
                'icon'=>$request->icon,

            ];

        if ($request->status)
        {
            $data['status']=1;
        }

        $socialMediaID=$request->socialMediaID;

        if ($socialMediaID)
        {
            SocialMedia::where('id',$socialMediaID)->update($data);

            alert()->success('Başarılı','Sosyal Medya Bilgisi Güncellendi')->showConfirmButton('Tamam','#3885d6')->persistent(true,true);
            return redirect()->route('admin.socialMedia.list');
        }
        else
        {
            SocialMedia::create($data);
            alert()->success('Başarılı','Sosyal Medya Bilgisi Eklendi')->showConfirmButton('Tamam','#3885d6')->persistent(true,true);
            return redirect()->route('admin.socialMedia.list');
        }
    }

    public function delete(Request $request)
    {
        $id=$request->socialMediaID;

        SocialMedia::where('id',$id)->delete();

        return response()->json([],200);
    }

    public function changeStatus(Request $request)
    {
        $id=$request->socialMediaID;
        $newStatus=null;
        $findSocialMedia=SocialMedia::find($id);
        $status=$findSocialMedia->status;
        if ($status)
        {
            $status=0;
            $newStatus="Pasif";
        }
        else
        {
            $status=1;
            $newStatus="Aktif";

        }
        $findSocialMedia->status=$status;
        $findSocialMedia->save();

        return response()->json([
            'newStatus'=>$newStatus,
            '$findSocialMedia'=>$id,
            'status'=>$status
        ],200);



    }

}
