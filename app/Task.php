<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title' , 'photo'];


     //scopes ---------------------------------
     public function scopeWhenSearch($query, $search)
     {
         return $query->when($search, function ($q) use ($search) {
             return $q->where('title', 'like', "%$search%");
         });
 
     }// end of scopeWhenSearch

}//end of class



