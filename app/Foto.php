<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    // 
    //mendaftarkan atribut yang ada didalam fillable untuk di simpan  saat melakukan input
    protected $fillable = [
        'foto'
    ];
	//membuat fungsi tower
    public function tower(){
    	//membuat relasi one to many ke model Tower
		return $this->hasMany('App\Tower','id');
    }
}
