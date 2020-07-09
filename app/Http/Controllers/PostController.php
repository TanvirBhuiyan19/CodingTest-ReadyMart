<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller {

    public function postSave(Request $request) {
        $data = request()->validate([
            'content' => 'required',
            'section' => 'required',
            'title' => 'required|string|max:255|unique:posts',
            'description' => 'required|string|max:2000',
            'action' => 'required',
        ]);

        if ($request->image != '') {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $directory = 'public/post/images/';
            $image->move($directory, $imageName);
        } else {
            $imageName = null;
        }

        if ($request->video != '') {
            $videoURL = $request->input('video');
        } else {
            $videoURL = null;
        }

        DB::table('posts')->insert([
            'content' => $request->input('content'),
            'section' => $request->input('section'),
            'title' => $request->input('title'),
            'image' => $imageName,
            'video' => $videoURL,
            'description' => $request->input('description'),
            'action' => $request->input('action'),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
//        return redirect()->back()->with('msg','Post/Video created successfully !!');
        return redirect('/dashboard')->with('msg', 'Post/Video created successfully !!');
    }
    
    public function postView($title)
    {
        $title = str_replace('-',' ',$title);
        $singlePost = DB::table('posts')->where('title', $title)->first();
        return view('post.singlePost', compact('singlePost'));
    }
    
    public function videoView($title)
    {
         $title = str_replace('-',' ',$title);
        $singleVideo = DB::table('posts')->where('title', $title)->first();
        return view('post.singleVideo', compact('singleVideo'));
    }

}
