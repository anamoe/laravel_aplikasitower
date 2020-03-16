<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Tower extends Model
{
    //

    //mendaftarkan atribut yang ada didalam fillable untuk di simpan  saat melakukan input
     protected $fillable = [
        'nama_tower', 'alamat', 'rt', 'rw', 'id_kec', 'id_desa', 'koor_lat', 'koor_leng',
        'tinggi','tanggal_imb', 'id_provider1', 'id_provider2', 'id_provider3', 'ket_pemilik', 'akhir_sewa', 'nama_pemilik_tower','nama_pemilik_lahan', 
        'id_jenis_tower','id_foto','id_user'
    ];
	
	//Relasi database dari tabel tower ke desa
    public function desa(){
    	return $this->belongsTo('App\Desa','id_desa','id_desa');
    }
    //Relasi database dari tabel tower ke foto
    public function foto(){
        return $this->belongsTo('App\Foto','id_foto','id');
    }
    //Relasi database dari tabel tower ke kecamatan
     public function kecamatan(){
        return $this->belongsTo('App\Kecamatan','id_kec','id_kecamatan');
    }
    //Relasi database dari tabel tower ke jenis tower
     public function jenis(){
        return $this->belongsTo('App\Jenis_Tower','id_jenis_tower','id');
    }
}
