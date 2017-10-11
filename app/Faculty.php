<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
   protected $fillable = ['kode_jurusan','jurusan'];

   public function profiles()
    {
    	return $this->hasMany('App\Profile');
    }

     public function categories()
    {
    	return $this->hasMany('App\Category');
    }
}
