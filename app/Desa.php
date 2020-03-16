<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    //Relasi database dari tabel desa ke kecamatan

    
	//fungsi kecamatan untuk menampilkan data kecamatan
    public function kecamatan(){
    	//id_kecamatan sebagai foreign key pada tabel Desa
    	return $this->belongsTo('App\Kecamatan','id_kec','id_kecamatan');
    }
    //fungsi tower menampilkan data tower
    public function tower(){
    	//membuat relasi one to many ke model tower.
    	return $this->hasMany('App\Tower');
    }
}
