<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class face extends Model
{
    protected $table = 'faces';

    protected $fillable = [ 'image','post','created_at','updated_at'];
}
