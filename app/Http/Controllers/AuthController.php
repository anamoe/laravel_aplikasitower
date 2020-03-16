<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Alert;

class AuthController extends Controller
{
    //

   //membuat fungsi getLogin untuk menampilkan halaman Login.
    public function getLogin(){

    	return view('login');
    }

 //membuat fungsi postLogin untuk melakukan proses autentikasi login.
    public function postLogin(Request $request){
        //proses pengecekan username dan password dari database pada saat login.
    	if(auth()->attempt(['username' => $request->username, 'password' => $request->password])){

    		//jika akun memiliki role_id=1, maka sebagai admin kemudian menuju ke halaman admin.
            if(auth()->user()->role_id == 1){
                return redirect()->route('tower.index');

            //jika akun memiliki role_id=2, maka sebagai user kemudian menuju ke halaman user.
            }
            else if(auth()->user()->role_id == 2){
                return redirect()->route('users.index');

            }
            
        }
        //jika tidak ada akun, maka akan menampilkan halaman login.
        Alert::error('Akun Tidak Ada');
        return redirect()->route('halaman_login');
        
    }
    //membuat fungsi getDaftar untuk menampilkan halaman Daftar.
    public function getDaftar(){

    	return view('daftar');
    }

    //membuat fungsi postLogin untuk melakukan proses autentikasi pada saat Daftar.
    public function postDaftar(Request $request){

        //validasi jika username, nama, passsword harud di isi.
         $this->validate($request,[
            'username' => 'required|unique:users,username',
            'nama'    => 'required',
            'password' => 'required',
        ]);
    	
        //mengambil data dari inputan dan disimpan ke dalam database.
    	User::create([
    		'username'=> $request->username,
            'nama'=> $request->nama,
            'role_id'=> $request->role_id,
    		'password' => bcrypt($request->password)

    	]);

        //jika berhasil maka akan menampilakn alert sukses dan tetap dihalaman daftar.
        Alert::success("Berhasil");
    	return redirect()->back();
    }
    //membuat fungsi logout untuk proses logout saat sudah login.
    public function logout(){
        
        //jika logout maka akan diarahkan ke halaman login..
        auth()->logout();
        return redirect()->route('halaman_login');
    }

    public function lihatuser(){

        $users = User::all();
        return view('lihatuser',compact('users'));
    }

    public function updateuser($id){
        $users = User::findOrFail($id);;
        return view('updateuser',compact('users'));
    }

    public function prosesupdate(Request $request, $id){
        //validasi jika username, nama, passsword harud di isi.
         
         $users = User::findOrFail($id);


         $this->validate($request,[
            'username' => 'required',
            'nama'    => 'required',
            
        ]);


         if (trim($request->password) == ''){

            $input = $request->except('password');

        }else{

            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }

         $users->update($input);

        //jika berhasil maka akan menampilakn alert sukses dan tetap dihalaman daftar.
        Alert::success("Berhasil");
        return redirect('lihat');
    }

    public function hapususer($id){
        $users =User::findOrFail($id);
        $users->delete();
        Alert::success("Berhasil");
        return redirect()->back();

    }
    public function search(Request $request){
        $cari = $request->get('search');
        $users = User::where('nama','LIKE','%'.$cari.'%')->paginate(10);
        return view('lihatuser', compact('users'));
    }
}
