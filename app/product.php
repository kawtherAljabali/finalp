<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';

    protected $fillable = ['name', 'desc', 'price', 'image','created_at','updated_at','quantity','priority'];

    public function product()
    {
        return $this->belongsTo(product::class);
    }
    public function getcategoryname()
    {
        return Category::where('id', $this->category_id)->first()->name;
    }
  
    // public function getsubcategoryname()
    // {
    //     return subcatigory::where('id', $this->subcatigory_id)->first()->name;
    // }

    public function getsubcategoryname()
    {
        return subcatigory::where('id', $this->subcatigory_id)->first()->name;
        // return $this->belongsTo('App\subcatigory','subcatigory_id','id');

    }

    public function subcat(){
        return $this->belongsTo('App\subcatigory','subcatigory_id','id');
    }
   
    public function users()
    {
        return $this->belongsToMany(User::class, 'orders')->withPivot(['price', 'quantity'])    ;
    }
}
