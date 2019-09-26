<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Post;
use App\User;

use Illuminate\Http\Request;

class ShowController extends Controller
{
  
    public function show($id){
       
        $user=User::all();
      
       // $comments=Comment::latest()->get();
        $posts=Post::all();
        $posts=\App\Post::findorFail($id);
        return view('show',compact('posts'));
    }

  
}
