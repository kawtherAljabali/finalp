<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   protected $table='orders';
   protected $fillable =[
    'user_id',
     'total',
   ];


   public function user()
   {
       return $this->belongsTo(User::class, 'user_id', 'id');
   }

   public function items()
   {
       return $this->hasMany(Orderitem::class, 'order_id', 'id');
   }
}
