<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandTranslation extends Model
{
    
    public $timestamps = false;
    protected $fillable = ['title' , 'description'];

}//end of model
