<?php

namespace App\Http\Controllers;
//use App\Post;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function fetch($id){

    
        
        $users=\App\User::findorFail($id);
     
        return view('profile' ,compact('users'));

    }
    
}
