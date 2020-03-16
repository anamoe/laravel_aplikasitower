<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    //variabel tabel untuk user
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    //mennyimpan data  saat melakukan input
    protected $fillable = [
        'username', 'password', 'role_id', 'nama',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Relasi database dari tabel user kerole
    public function role(){
        //role_id sebagai foreign key pada tabel User
        return $this->belongsTo('App\Role','role_id');
    }

    //membuat fungsi isAdmin untuk admin
    public function isAdmin(){
        //jika role_name=admin maka benar
        if($this->role->name == 'admin'){
            return true;
        }
            return false;
    }
    
    //membuat fungsi isUser untuk user
    public function isUser(){
        //jika role_name=user maka benar
        if($this->role->name == 'user'){
            return true;
        }
            return false;
    }
    
}
