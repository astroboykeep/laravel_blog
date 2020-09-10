<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
    public function posts(){
        $post = new Post();
        return view('home', ['post' => $post->orderByDesc('id')->get()]);
    }

    public function add_post(){
        return view('add_post');
    }

    public function add(Request $request){
        // $valid = $request->validate([
        //     'message' => 'required|min:1|max:100'
        // ]);

        $post = new Post();  
        $post->category = $request->input('category');
        $post->title = $request->input('title'); 
        $post->subject = $request->input('subject'); 
        $post->save();
        
        return redirect()->route('home');
    }

    public function showOne($id){
        $post = new Post(); 
        return view('review', ['data' => $post->find($id)]);
    }
}
