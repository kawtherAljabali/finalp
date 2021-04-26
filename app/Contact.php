<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table = 'contact_m';

    protected $fillable=['name','last_name','phone','email','msg','created_at','created_at','updated_at'];

}
