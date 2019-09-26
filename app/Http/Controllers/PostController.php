<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

use Spatie\Searchable\Search;


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(){

      $data=request()->validate([
           'title' => ['required','max:50','string'],
           'Description'=>['required','string','max:190'],
           'story'=>['required','string','max:190'],
           'imageP'=>'required|image',

        ]);


        $imagePath=(request('imageP')->store('upload','public'));
        $image=Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
        $image->save();

        Auth()->user()->posts()->create([
             'title'=>$data['title'],
             'Description'=>$data['Description'],
             'story'=>$data['story'],
             'imageP'=>$imagePath,

        ]);
        
        return redirect('/');
    }

  
}
