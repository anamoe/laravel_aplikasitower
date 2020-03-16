<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tower;
use App\Desa;
use App\Kecamatan;
use App\Provider;
use App\Jenis_Tower;
use App\Foto;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     //membuat fungsi index untuk halaman index data tower.
    public function index()
    {
        //mengambil tabel desa dari database .
        $data_desa = Desa::all();
        //mengambil tabel kecamatan dari database dan disortir urut dari abjad paling atas.
        $kecamatan = Kecamatan::orderBy('kecamatan', 'ASC')->get();
        //menampilkan data duplikasi hanya muncul 1 kali.
        $data_kec = Tower::distinct()->get(['id_kec']);
         //mengambil tabel tower dari database.
        $towers = Tower::all();
        //menghitung data pada tabel tower berdasarkan id kecamatan dan id jenis tower.
        $radio = Tower::where('id_kec','35.09.01')->where('id_jenis_tower','1')->count();      
        //manmpilkan halaman user
        return view('user', compact('towers','data_kec','data_desa','kecamatan','radio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //membuat fungsi show untuk halaman hasil data tower.
    public function show($id)
    {
        //menampilkan data tabel tower dengan id kecamatan.
        $towers = Tower::where('id_kec',$id)->get();
        //menampilak tabel desa dengan sortir abjad paling atas.
        $data = Desa::orderBy('desa','ASC')->where('id_kec',$id)->get();
        //menampilkan tabel kecamatan dengan id kecamatan.
        $kecamatan = Kecamatan::where('id_kecamatan',$id)->get();
        //menampilkan halaman data2
        return view('data2',compact('data','towers','id','kecamatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //membuat fungsi edit untuk melihat detail data tower.
    public function edit($id)
    {
        //menampilkan tabel tower dengan id desa
         $towers = Tower::where('id_desa',$id)->get();
         //menampilkan halaman detail.
         return view('detail',compact('towers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
