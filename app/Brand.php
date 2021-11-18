<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{


    protected $fillable = ['title', 'description'];
    protected $hidden = [];

    public $translatedAttributes = ['title', 'description'];

    
}// end of class brand
