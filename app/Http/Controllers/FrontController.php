<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Messages;
use App\Models\PersonalInformation;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $educationList=Education::query()
            ->statusActive()
            //->where('status',1)
            ->select('education_date','university_name','university_branch','description')
            ->orderBy('education_date','ASC')
            ->get();

        $experienceList=Experience::query()
            ->statusActive()
            ->select('date','task_name','company_name','description')
            ->orderBy('date','ASC')
            ->get();

        $personal=PersonalInformation::find(1);
        $social=SocialMedia::where('status',1)->get();

        return view('frontend.index',compact('educationList','experienceList','personal','social'));
    }
    public function resume(){

        return view('frontend.resume');
    }
    public function portfolio(){
        return view('frontend.portfolio');
    }
    public function blog(){
        return view('frontend.blog');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function sendMessage(Request $request)
    {
        $message=new Messages;
        $message->name=$request->name;
        $message->mail=$request->mail;
        $message->message=$request->message;
        $message->save();

        alert()->success('Başarılı','Mesajnız Gönderildi')->showConfirmButton('Tamam','#3885d6')->persistent(true,true);
        return redirect()->route('contact');



    }
}
