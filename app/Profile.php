<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	 protected $fillable = ['nim', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'photo', 'faculty_id', 'user_id'];


     public function user()
    {
    	return $this->belongsTo('App\User');
    }

     public function faculty()
    {
    	return $this->belongsTo('App\Faculty');
    }
}
