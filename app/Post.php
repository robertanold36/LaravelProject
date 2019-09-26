<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;


class Post extends Model

{
   protected $guarded=[];

    
    
    public function user(){
        
        return $this->belongsTo(User::class);
     }

     public function comments(){

        return $this->hasMany(Comment::class);
     }
   
}
