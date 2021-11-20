<?php

namespace App;

use App\BrandTranslation;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{


    protected $fillable = ['title', 'description'];
    protected $hidden = [];

    public $translatedAttributes = ['title', 'description'];

    
    public function brand(){
        return $this->hasOne(BrandTranslation::class);
    }
}// end of class brand
