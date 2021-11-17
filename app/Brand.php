<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use \Dimsav\Translatable\Translatable;

    protected $guarded = [];
    public $translatedAttributes = ['title' , 'description'];

    
}// end of class brand
