<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcatigory extends Model
{
    protected $fillable = ['name','image','created_at','updated_at'];

    public function getcategoryname()
    {
        return Category::where('id', $this->category_id)->first()->name;
    }

    // public function maincatigory(){

    //     return $this->belongsTo('App\Category');
    // }

    public function product(){

        return $this->hasMany('App\product');
    }

}
