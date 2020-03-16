<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
	//Relasi database dari tabel role ke user
    protected function user(){
    	//membuat relasi one to many ke model User
    	return $this->hasMany('App\User');
    }
   
}
