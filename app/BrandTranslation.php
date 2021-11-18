<?php

namespace App;

use App\Brand;
use Illuminate\Database\Eloquent\Model;

class BrandTranslation extends Model
{
    protected $fillable = ['title', 'description'];
    public $timestamps = false;

    public function brandTranslate(){
        return $this->belongsTo(Brand::class);
    }
 
}//end of model
