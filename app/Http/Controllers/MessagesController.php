<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function list(){
        $list=Messages::all();
        return view('backend.message_list',compact('list'));
    }
    public function changeRead(Request $request)
    {
        $id=$request->messageID;
        $newStatus=null;
        $findMessage=Messages::find($id);
        $read=$findMessage->read;
        if ($read)
        {
            $read=0;
            $newStatus="Okunmadı";
        }
        else
        {
            $read=1;
            $newStatus="Okundu";

        }
        $findMessage->read=$read;
        $findMessage->save();

        return response()->json([
            'newStatus'=>$newStatus,
            'messageID'=>$id,
            'read'=>$read
        ],200);



    }
    public function delete(Request $request)
    {
        $id=$request->messageID;

        Messages::where('id',$id)->delete();

        return response()->json([],200);
    }
}
