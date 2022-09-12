<?php

namespace App\Http\Controllers;


use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list()
    {
        $post=Post::all();
        return view('backend.post_list',compact('post'));
    }
    public function changeStatus(Request $request)
    {
        $id=$request->postID;
        $newStatus=null;
        $findPost=Post::find($id);
        $status=$findPost->status;
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
        $findPost->status=$status;
        $findPost->save();

        return response()->json([
            'newStatus'=>$newStatus,
            'postID'=>$id,
            'status'=>$status
        ],200);



    }
    public function delete(Request $request)
    {
        $id=$request->postID;

        Post::where('id',$id)->delete();

        return response()->json([],200);
    }
    public function addShow(Request $request)
    {
        $id=$request->postID;
        $post=null;
        if (!is_null($id))
        {
            $post=Post::find($id);
        }
        return view('backend.post_add',compact('post'));
    }
    public function add(PostRequest $request)
    {

        dd($request->all());
    }
}
