<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{


    public function post_page()
    {
        return view('admin.post_page');
    }




    public function add_post(Request $request)
    {
        $user = Auth::user();
        $userid = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;

        $post =  new Post;

        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $userid;
        $post->name = $name;
        $post->usertype = $usertype;
        $post->post_status = 'active';
        //****//
        $image = $request->file('image')->store('uploads' , 'public');
        $post->image = $image;
        $post->save();
        return redirect()->back()->with('message', ' Post Added Successfully ');
    }





    public function show_post()
    {
        $posts = Post::all();
        return view('admin.show_post', compact('posts'));
    }





    public function delete_post($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }





    public function edit_page($id)
    {
        $post = Post::find($id);
        return view('admin.edit_page', compact('post'));
    }





    public function update_post(Request $request, $id)
    {
        $data = Post::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $image = $request->image;
        if ($image) {
            $image = $request->file('image')->store('uploads' , 'public');
            $data->image = $image;
        }
        $data->save();
        return redirect('show_post');
    }






    public function accept_post($id)
    {
        $data = Post::find($id);
        $data->post_status = 'active';
        $data->save();
        return redirect()->back();
    }




    public function reject_post($id)
    {
        $data = Post::find($id);
        $data->post_status = 'reject';
        $data->save();
        return redirect()->back();
    }
}
