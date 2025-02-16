<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        if (Auth::id()) {

            $posts = Post::where('post_status', '=', 'active')->get();;
            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                return view('home.homepage', compact('posts'));
            } elseif ($usertype == 'admin') {
                return view('admin.adminhome');
            } else {
                return redirect()->back();
            }
        }
    }

    public function Homepage()
    {
        $posts = Post::where('post_status', '=', 'active')->get();
        return view('home.homepage', compact('posts'));
    }

    public function post_details($id)
    {
        $post = Post::find($id);
        return view('home.post_details', compact('post'));
    }

    public function create_post()
    {
        return view('home.create_post');
    }

    public function user_post(Request $request)
    {
        $user = Auth::user();
        $username = $user->name;
        $userid = $user->id;
        $usertype = $user->usertypr;
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $userid;
        $post->name = $username;
        $post->usertype = $usertype;
        $image = $request->file('image');
        $post->image = $image;
        $post->save();
        return redirect()->back();
    }

    public function my_posts()
    {
        $user = Auth::user();
        $userid = $user->id;
        $data = Post::where('user_id', '=', $userid)->get();
        return view('home.my_posts', compact('data'));
    }

    public function my_post_delete($id)
    {
        $data = Post::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_post($id)
    {
        $data = Post::find($id);
        return view('home.post_page', compact('data'));
    }

    public function update_post_data(Request $request, $id)
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
        return redirect()->back();
    }
}
