<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    protected $table='order_items';
    protected $fillable =[
      'order_id',
      'product_id',
      'price',
      'quantity',
    ];


    public function product()
    {
        return $this->belongsTo(product::class, 'product_id', 'id');
    }
}
