<?php

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
Auth::routes();
Route::get('/','WebController@index')->name('index');
Route::get('/paket/{id}', 'WebController@paket')->name('paket');
Route::get('/info', 'InfoController@index')->name('info');
Route::get('/galeri', 'GaleriController@index')->name('galeri');
Route::get('/info/read/{id}', 'InfoController@read');
Route::get('/cart', 'CartController@index')->name('cart');
Route::post('/cart/store', 'CartController@store');
Route::get('/cart/hapus/{id}', 'CartController@hapus');
Route::post('/cart/store2', 'CartController@store2');

Route::middleware('auth')->group(function () {
//	Route::middleware(['role_user:user'])->group(function (){
		Route::get('/reservasi', 'ReservasiController@index')->name('reservasi');
		Route::get('/reservasi/store', 'ReservasiController@store')->name('reservasis');
		Route::get('/reservasi/read/{id}', 'ReservasiController@read');
//	});

//	Route::middleware(['role_user:admin'])->group(function ()
//	{
		Route::get('/home', 'HomeController@index')->name('home');
		Route::get('/admin','AdminController@index')->name('admin');

		Route::get('/paket-wisata', 'PaketWisataController@index')->name('paket-wisata');
		Route::get('/paket-wisata/tambah', 'PaketWisataController@tambah');
		Route::post('/paket-wisata/store', 'PaketWisataController@store');
		Route::get('/paket-wisata/edit/{id}', 'PaketWisataController@edit');
		Route::put('/paket-wisata/update/{id}', 'PaketWisataController@update');
		Route::get('/paket-wisata/read/{id}', 'PaketWisataController@read');
		Route::get('/paket-wisata/hapus/{id}', 'PaketWisataController@delete');

		Route::get('/info-wisata', 'InfoWisataController@index')->name('info-wisata');
		Route::get('/info-wisata/tambah', 'InfoWisataController@tambah');
		Route::post('/info-wisata/store', 'InfoWisataController@store');
		Route::get('/info-wisata/edit/{id}', 'InfoWisataController@edit');
		Route::put('/info-wisata/update/{id}', 'InfoWisataController@update');
		Route::get('/info-wisata/read/{id}', 'InfoWisataController@read');
		Route::get('/info-wisata/hapus/{id}', 'InfoWisataController@delete');

		Route::get('/trip-paket', 'TripPaketController@index')->name('trip-paket');
		Route::get('/trip-paket/tambah', 'TripPaketController@tambah');
		Route::post('/trip-paket/store', 'TripPaketController@store');
		Route::get('/trip-paket/edit/{id}', 'TripPaketController@edit');
		Route::put('/trip-paket/update/{id}', 'TripPaketController@update');
		Route::get('/trip-paket/read/{id}/{tag}', 'TripPaketController@read');
		Route::get('/trip-paket/hapus/{id}', 'TripPaketController@delete');

		Route::get('/areservasi', 'Areservasi@index')->name('areservasi');
		Route::get('/areservasi/create', 'Areservasi@create');
		Route::post('/areservasi/store', 'Areservasi@store');
		Route::get('/areservasi/edit/{id}', 'Areservasi@edit');
		Route::put('/areservasi/update/{id}', 'Areservasi@update');
		Route::get('/areservasi/show/{id}/{tag}', 'Areservasi@show');
		Route::get('/areservasi/destroy/{id}', 'Areservasi@destroy');

		Route::get('/trip-paket/harga/{id}', 'TripPaketController@harga');
		Route::post('/trip-paket/storeharga', 'TripPaketController@storeharga');
		Route::get('/trip-paket/hapusharga/{id}/{ids}', 'TripPaketController@deleteharga');

		Route::get('/trip-paket/fasilitas/{id}', 'TripPaketController@fasilitas');
		Route::post('/trip-paket/storefasilitas', 'TripPaketController@storefasilitas');
		Route::get('/trip-paket/hapusfasilitas/{id}/{ids}', 'TripPaketController@deletefasilitas');

		Route::get('/trip-paket/jadwal/{id}', 'TripPaketController@jadwal');
		Route::post('/trip-paket/storejadwal', 'TripPaketController@storejadwal');
		Route::get('/trip-paket/hapusjadwal/{id}/{ids}', 'TripPaketController@deletejadwal');

		Route::get('/destinasi-wisata', 'DestinasiWisataController@index')->name('destinasi-wisata');
		Route::get('/destinasi-wisata/tambah', 'DestinasiWisataController@tambah');
		Route::post('/destinasi-wisata/store', 'DestinasiWisataController@store');
		Route::get('/destinasi-wisata/edit/{id}', 'DestinasiWisataController@edit');
		Route::put('/destinasi-wisata/update/{id}', 'DestinasiWisataController@update');
		Route::post('/destinasi-wisata/upload', 'DestinasiWisataController@upload');
		Route::get('/destinasi-wisata/read/{id}', 'DestinasiWisataController@read');
		Route::get('/destinasi-wisata/hapus/{id}', 'DestinasiWisataController@delete');
		Route::get('/destinasi-wisata/hapus2/{id}/{pw}', 'DestinasiWisataController@delete2');

		Route::get('/info-web', 'InfoWebController@index')->name('info-web');
		Route::get('/info-web/edit/{id}', 'InfoWebController@edit');
		Route::put('/info-web/update/{id}', 'InfoWebController@update');
		Route::get('/info-web/read/{id}', 'InfoWebController@read');

		Route::get('/tag', 'TagController@index')->name('tag');

		Route::get('/user', 'UserController@index')->name('user');
//	});
});

Auth::routes();
Route::get('/maps', function () {
    return view('maps');
});
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
