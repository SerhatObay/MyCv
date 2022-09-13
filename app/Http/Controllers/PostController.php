<?php

namespace App\Http\Controllers;


use App\Http\Requests\PostRequest;
use App\Models\Education;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function list()
    {
        $post = Post::all();
        return view('backend.post_list', compact('post'));
    }

    public function changeStatus(Request $request)
    {
        $id = $request->postID;
        $newStatus = null;
        $findPost = Post::find($id);
        $status = $findPost->status;
        if ($status) {
            $status = 0;
            $newStatus = "Pasif";
        } else {
            $status = 1;
            $newStatus = "Aktif";

        }
        $findPost->status = $status;
        $findPost->save();

        return response()->json([
            'newStatus' => $newStatus,
            'postID' => $id,
            'status' => $status
        ], 200);


    }

    public function delete(Request $request)
    {
        $id = $request->postID;

        $post = Post::find($id);
        $image_path = public_path('/') . $post->image;
        if ($post) {
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }

        Post::where('id', $id)->delete();


        return response()->json([], 200);
    }

    public function addShow(Request $request)
    {
        $id = $request->postID;
        $post = null;
        if (!is_null($id)) {
            $post = Post::find($id);
        }
        return view('backend.post_add', compact('post'));
    }

    public function add(PostRequest $request)
    {


        if (isset($request->postID)) {
            $post = Post::findOrFail($request->postID);
            $post->title = $request->title;
            $post->description = $request->description;
            if ($request->hasFile('image')) {
                $imageName = Str::slug($request->title) . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('public/Post'), $imageName);
                $post->image = 'public/Post/' . $imageName;

            }



            $post->save();
            alert()->success('Başarılı', 'Paylaşım Güncellendi')
                ->showConfirmButton('Tamam', '#3885d6')
                ->persistent(true, true);
        }
        else
        {
            $posts = new Post();
            $posts->title = $request->title;
            $posts->description = $request->description;

            if ($request->hasFile('image')) {
                $imageName = Str::slug($request->title) . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('public/Post'), $imageName);
                $posts->image = 'public/Post/' . $imageName;
            }
            $posts->save();
            alert()->success('Başarılı', 'Paylaşım Eklendi')
                ->showConfirmButton('Tamam', '#3885d6')
                ->persistent(true, true);
        }




        return redirect()->route('admin.post.list');
    }

}
