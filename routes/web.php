<?php
use App\Http\Middleware\UserAuth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Melihat router dengan php artisan route:list

Route::get('/', function(){
	return view('home');
})->middleware('guest');


//Routes untuk akses TowesController
Route::resource('tower','TowersController')->middleware(['admin','auth']);

Route::resource('users','UsersController')->middleware(['user','auth']);

Route::get('/delete/{id}','TowersController@destroy')->middleware(['admin','auth'])->name('delete');
Route::get('/hapus/{id}','AuthController@hapususer')->name('hapus');

Route::get('/desa','TowersController@desa')->middleware(['admin','auth']);
Route::get('/update/{id}','TowersController@prosesEdit')->middleware(['admin','auth'])->name('update');
Route::get('/updateuser/{id}','AuthController@updateuser')->name('updateuser');
Route::put('/prosesupdateuser/{id}','AuthController@prosesupdate')->name('prosesupdateuser');


Route::get('/login','AuthController@getLogin')->middleware('guest')->name('halaman_login');
Route::post('/login','AuthController@postLogin')->middleware('guest')->name('login');
Route::get('/daftar','AuthController@getDaftar')->middleware(['admin','auth'])->name('halaman_daftar');
Route::post('/daftar','AuthController@postDaftar')->middleware(['admin','auth'])->name('daftar');
Route::get('/lihat','AuthController@lihatuser')->name('lihat');

Route::get('/logout','AuthController@logout')->middleware('admin')->name('logout');
Route::get('/logout-user','AuthController@logout')->middleware('user')->name('logout-user');
Route::get('cariuser','AuthController@search')->name('cariuser');
Route::get('/cetak','TowersController@cetak');
Route::get('/cetakpdf', 'TowersController@cetakpdf')->name('pdf');



