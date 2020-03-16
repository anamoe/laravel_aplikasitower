<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    //
    //Relasi database dari tabel kecamatan ke desa
   
    
	public function desa(){
		//membuat relasi one to many ke model Desa.
    	return $this->hasMany('App\Desa','id_kecamatan','id_kec');
    }
}
