<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =['name','image'];

    public function places(){

        return $this->hasMany('App\place');
    }

    public function product(){

        return $this->hasMany('App\product');
    }
    public function subcatigory(){

        return $this->hasMany('App\subcatigory');
    }
    public function animals(){

        return $this->hasMany('App\animal','category_id','id');
    }

    public function auction(){

        return $this->hasMany('App\auction');
    }
}
