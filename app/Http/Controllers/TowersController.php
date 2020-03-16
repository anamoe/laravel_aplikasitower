<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tower;
use App\Desa;
use App\Kecamatan;
use App\Provider;
use App\Jenis_Tower;
use App\Foto;
use PDF;

use Alert;


class TowersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //membuat fungsi index untuk halaman index data tower.
    public function index()
    {
        //mengambil tabel desa dari database.
        $data_desa = Desa::all();
        //mengambil tabel kecamatan dari database dan disortir urut dari abjad paling atas.
        $kecamatan = Kecamatan::orderBy('kecamatan', 'ASC')->get();
        //menampilkan data duplikasi hanya muncul 1 kali.
        $data_kec = Tower::distinct()->get(['id_kec']);
        //mengambil tabel tower dari database.
        $towers = Tower::all();
        //menghitung data pada tabel tower berdasarkan id kecamatan dan id jenis tower.
        $radio = Tower::where('id_kec','35.09.01')->where('id_jenis_tower','1')->count();      
          //menampilkan halaman hasil data tower.
        return view('hasil', compact('towers','data_kec','data_desa','kecamatan','radio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //membuat funngsi create untuk halaman Tambah Tower
    public function create()
    {
        //mengambil tabel desa dari database.
        $data_desa = Desa::all();
         //mengambil tabel kecamatan dari database dan disortir urut dari abjad paling atas.
        $data_kec = Kecamatan::orderBy('kecamatan', 'ASC')->get();
         //mengambil tabel provider dari database.
        $data_provider = Provider::all();
        //mengambil tabel jenis tower dari database.
        $data_jenis_tower = Jenis_Tower::all();
        //mengambil tabel tower dari database.
        $towers = Tower::all();
        //menampilkan halaman tambah data tower.
        return view('tambah', compact('towers','data_kec','data_desa','data_provider','data_jenis_tower'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

      //membuat fungsi store untuk  input data tower
    public function store(Request $request)
    {
        //
       //membuat validasi pada semua input harus diisi.
        $this->validate($request,[
            'nama_tower' => 'required',
            'alamat'    => 'required',
            'rt'         => 'required',
            'rw'         => 'required',
            'id_kec'      => 'required',
            'id_desa'      => 'required',
            'koor_lat'    => 'required|unique:towers,koor_lat',
            'koor_leng'    => 'required|unique:towers,koor_leng',
            'tinggi'        => 'required',
            'tanggal_imb'    => 'required',
            'id_provider1'    => 'required',
            'ket_pemilik'    => 'required',
            'akhir_sewa'     => 'required',
            'nama_pemilik_tower'    => 'required',
            'nama_pemilik_lahan'    => 'required',
            'id_jenis_tower'   => 'required',
            
            

        ]);
        //mengambil data dari inputan dan disimpan ke database.
        $input = $request->all();

         //jika mengirim file dengan id foto
        if($file = $request->file('id_foto')){
            //menggunakan nama dari file yang di di upload dengan original(tanoa duplikat).
            $name = time(). $file->getClientOriginalName();
            //memindah file ke folder images yang dibuat.
            $file->move('images',$name);
            //menggunakan variabel foto mengambil dari model Foto
            $photo = Foto::create(['foto'=>$name]);
            //menggunakan variabel input untuk mengambil id foto disimpan ke tabel tower.
            $input['id_foto'] = $photo->id;
        }

        //menyimpan variabet input ke tabel Tower.
        Tower::create($input);  

        //jika berhasil maka akan menampilkan alert sukses dan diarahkan ke tampilan halaman tambah.
        Alert::success("Berhasil");
        return redirect('/tower/create');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

      //membuat fungsi show untuk menampilkan halaman hasil dari input data tower. 
    public function show($id)
    {
        //menampilakn tabel tower dengan mengambil id kecamtan.
        $towers = Tower::where('id_kec',$id)->get();
        //menampilakn tabel desa dengan sortir menggunakan abjad paling atas.
        $data = Desa::orderBy('desa','ASC')->where('id_kec',$id)->get();
          //menampilkan tabel kecamatan dengan id kecamatan.
        $kecamatan = Kecamatan::where('id_kecamatan',$id)->get();
        //menampilkan halaman data tower.
        return view('data',compact('data','towers','id','kecamatan'));

        //return $towers;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

      //membuat fungsi edit untuk melakukan edit data tower.
    public function edit($id)
    {
        //menampilkan tabel tower berdasarkan id desa
         $towers = Tower::where('id_desa',$id)->get();
         //menampilkan halaman edit
         return view('edit',compact('towers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

      //membuat fungsi update untuk melakukan update data tower.
    public function update(Request $request, $id)
    {
        //menampilkan tabel tower 
         $tower = Tower::findOrFail($id);
         
         //validasi pada semua inputan harus diisi.
        $this->validate($request,[
            'nama_tower' => 'required',
            'alamat'    => 'required',
            'rt'         => 'required',
            'rw'         => 'required',
            'id_kec'      => 'required',
            'id_desa'      => 'required',
            'koor_lat'    => 'required',
            'koor_leng'    => 'required',
            'tinggi'        => 'required',
            'tanggal_imb'    => 'required',
            'id_provider1'    => 'required',
            'ket_pemilik'    => 'required',
            'akhir_sewa'     => 'required',
            'nama_pemilik_tower'    => 'required',
            'nama_pemilik_lahan'    => 'required',
            'id_jenis_tower'   => 'required',
            //validasi inputan harus diisi dengan type file yang ditentukan.
            'id_foto' => 'required|image|mimes:jpg,png,gif,jpeg,svg',
            

        ]);
   
        //mengirim inputan dan disimpan kedalam database.
        $input = $request->all();
       

         //jika mengirim file dengan id foto
        if($file = $request->file('id_foto')){
             //menggunakan nama dari file yang di di upload dengan original(tanoa duplikat).
            $name = time().$file->getClientOriginalName();
             //memindah file ke folder images yang dibuat.
            $file->move('images',$name);
             //menggunakan variabel foto dan mengambil dari model Foto
            $photo = Foto::create(['foto'=>$name]);
             //menggunakan variabel input untuk mengambil id foto disimpan ke tabel tower.
            $input['id_foto'] = $photo->id;
        }

        //melakukan update pada data tower
        $tower->update($input);
        //menmpilkan berhasil dengan alert sukses dan kembali ke halaman terkahir kali di akses.
        Alert::success("Berhasil");
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

      //membuat fungsi destroy untuk melakukan hapus data tower.
    public function destroy($id)
    {
        //mencari data dari tabel tower
         $towers = Tower::findOrFail($id);
         //melakukan aksi delete pada data tower
         $towers->delete();
         //menampilkan berhasil dengan alert sukses dan menampilkan halaman terakhir di akses.
         Alert::success("Berhasil");
         return redirect()->back();

    }

    //membuat fungsi desa untuk menampilkan list data desa    
    public function desa(Request $request){
        //menampilkan tabel desa dengan dari id kecamatan.
        $desa = Desa::where('id_kec',$request->id)->get();
        //mengembalikan data dalam bentuk json.
        return response()->json($desa);
    }

    //membuat fungsi prosesEdit untuk melakukan proses edit data tower.
    public function prosesEdit($id){
        //mengambil tabel desa dari database .
        $data_desa = Desa::all();
        //mencari tabel tower dari database.
        $towers = Tower::findOrFail($id);
        //mengambil data dari tabel desa di database. 
        $data_desa = Desa::all();
         //mengambil tabel kecamatan dari database dan disortir urut dari abjad paling atas.
        $data_kec = Kecamatan::orderBy('kecamatan', 'ASC')->get();
          //mengambil tabel provider dari database .
        $data_provider = Provider::all();
          //mengambil tabel jenis tower dari database.
        $data_jenis_tower = Jenis_Tower::all();
        //menampilkan halaman update data tower.
        return view('update', compact('towers','data_kec','data_desa','data_provider','data_jenis_tower'));
        
    }

    // public function lihatuser($id){
    //     $data_user =User::all();

    //     return view('user',compact('data_user')); 
    // }

public function cetak(){
    $towers = Tower::all();
    return view('cetak',compact('towers'));
    
}

public function cetakpdf(){
    $towers = Tower::all();
    $pdf = PDF::loadview('cetakpdf',compact('towers'));
        return $pdf->stream();

}

}
