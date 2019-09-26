<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Post $posts){

         $this->validate(request(),[
             'comment'=>'required',

        ]);

         Comment::create([

            'comment'=>request('comment'),
            'posts_id'=>$posts->id,
            
         ]);

        return back();
    }}
