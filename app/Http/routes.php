<?php

Route::group(['middleware'=>['web']],function()
{

Route::get('/login','sesiController@form');
Route::post('/login','sesiController@validasi');
Route::get('/logout','sesiController@logout');
Route::get('/','sesiController@index');




Route::group(['middleware'=>'wajibpajakMiddleware'],function()
{
Route::get('master1','sesiController@master1');

Route::get('index','wpController@index');
Route::get('wp/{wajibpajak}','wpController@detail');

Route::get('objek','wpController@objek');
Route::get('ojk/{pajak}','wpController@detailobjek');

Route::get('asetbg','wpController@asetbg');

Route::get('asetth','wpController@asetth');

Route::get('tagih','wpController@tagih');
Route::get('tgh/{pembayaran}','wpController@detailtagih');


// Route::get('wajibpajak/tambah','diriController@tambah');
// Route::get('diri/{id}','diriController@lihat');
// Route::post('wajibpajak/simpan','diriController@simpan');
// Route::get('wajibpajak/edit/{wajibpajak}','diriController@edit');
// Route::post('wajibpajak/edit/{wajibpajak}','diriController@update');
// Route::get('wajibpajak/hapus/{wajibpajak}','diriController@hapus');

// Route::get('wajibpajak/{wajibpajak}','wajibpajakController@lihat');
// Route::get('pembayaran/{pembayaran}','pembayaranController@lihat');
});





Route::group(['middleware'=>'petugasMiddleware'],function()
{
Route::get('master2','sesiController@master2');

Route::get('user','userController@awal');
Route::get('user/{user}','userController@lihat');
Route::get('user/edit/{user}','userController@edit');
Route::post('user/edit/{user}','userController@update');


Route::get('petugas','petugasController@awal');
Route::get('petugas/tambah','petugasController@tambah');
Route::get('petugas/{petugas}','petugasController@lihat');
Route::post('petugas/simpan','petugasController@simpan');
Route::get('petugas/edit/{petugas}','petugasController@edit');
Route::post('petugas/edit/{petugas}','petugasController@update');
Route::get('petugas/hapus/{petugas}','petugasController@hapus');

Route::get('wajibpajak','wajibpajakController@awal');
Route::get('wajibpajak/tambah','wajibpajakController@tambah');
Route::get('wajibpajak/{wajibpajak}','wajibpajakController@lihat');
Route::post('wajibpajak/simpan','wajibpajakController@simpan');
Route::get('wajibpajak/edit/{wajibpajak}','wajibpajakController@edit');
Route::post('wajibpajak/edit/{wajibpajak}','wajibpajakController@update');
Route::get('wajibpajak/hapus/{wajibpajak}','wajibpajakController@hapus');

Route::get('bangunan','bangunanController@awal');
Route::get('bangunan/tambah','bangunanController@tambah');
Route::get('bangunan/{bangunan}','bangunanController@lihat');
Route::post('bangunan/simpan','bangunanController@simpan');
Route::get('bangunan/edit/{bangunan}','bangunanController@edit');
Route::post('bangunan/edit/{bangunan}','bangunanController@update');
Route::get('bangunan/hapus/{bangunan}','bangunanController@hapus');

Route::get('tanah','tanahController@awal');
Route::get('tanah/tambah','tanahController@tambah');
Route::get('tanah/{tanah}','tanahController@lihat');
Route::post('tanah/simpan','tanahController@simpan');
Route::get('tanah/edit/{tanah}','tanahController@edit');
Route::post('tanah/edit/{tanah}','tanahController@update');
Route::get('tanah/hapus/{tanah}','tanahController@hapus');

Route::get('pajak','pajakController@awal');
Route::get('pajak/tambah','pajakController@tambah');
Route::get('pajak/tempo','pajakController@tempo');
Route::post('pajak/savetempo','pajakController@savetempo');
Route::get('pajak/{pajak}','pajakController@lihat');
Route::post('pajak/simpan','pajakController@simpan');
Route::get('pajak/edit/{pajak}','pajakController@edit');
Route::post('pajak/edit/{pajak}','pajakController@update');
Route::get('pajak/hapus/{pajak}','pajakController@hapus');

Route::get('pembayaran','pembayaranController@awal');
Route::get('pembayaran/tambah','pembayaranController@tambah');
Route::get('pembayaran/{pembayaran}','pembayaranController@lihat');
Route::post('pembayaran/simpan','pembayaranController@simpan');
Route::get('pembayaran/edit/{pembayaran}','pembayaranController@edit');
Route::post('pembayaran/edit/{pembayaran}','pembayaranController@update');
Route::get('pembayaran/hapus/{pembayaran}','pembayaranController@hapus');
});


});

// buat selalu awalan prefix
// Route::group(['middleware'=>'autentifikasiUser', 'prefix'='user'],function()



// Route::get('ujiHas','RelationshipRebornController@ujiHas');
// Route::get('ujiDoesntHave','RelationshipRebornController@ujiDoesntHave');

// Route::get('/',function()
// {
// 	return \App\dosen_matakuliah::whereHas('dosen',function($query)
// 	{
// 		$query->where('nama','like','$s%');
// 	})
// 	->orWhereHas('matakuliah',function($kueri)
// 	{
// 		$kueri->where('title','like','%a%');
// 	})
// 	->with('dosen','matakuliah')
// 	->groupBy('dosen_id')
// 	->get();
// });

// Route::get('/',function(Illuminate\Http\Request $request)
// {
// 	echo "ini adalah request dari method get". $request->nama;
// });

// use Illuminate\Http\Request;
// Route::get('/',function()
// {
// 	echo Form::open(['url'=>'/']).
// 			Form::label('nama').
// 			Form::text('nama',null).
// 			Form::submit('kirim').
// 			Form::close();
// });
// Route::post('/',function(Request $request)
// {
// 	echo "Hasil dari input tadi nama:". $request->nama;
// });