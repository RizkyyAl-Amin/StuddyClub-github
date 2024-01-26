<?php

use Illuminate\Support\Facades\Route;
use App\Models\Kategori;
use App\Models\Mahasiswa;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('index');
})->name('dashboard');

use App\Http\Controllers\MahasiswaController;
Route::resource('mahasiswa', MahasiswaController::class);

// use App\Http\Controllers\KategoriController;
// Route::get('kategori/semua', [KategoriController::class,'semua']);
 
use App\Http\Controllers\KategoriController2;
Route::resource('kategori', KategoriController2::class);

Route::get('kategori/tambah', function () {
	Kategori::create([
		'nama_kategori' => "Pakaian Baru",
		'deskripsi' => "Semua Jenis pakaian baru"
	]);
});

// Route::get('kategori/update/{id}', function ($id) {
// 	Kategori::find($id)->update([
// 		'nama_kategori' => "Pakaian Pria",
// 		'deskripsi' => "Semua Jenis pakaian Pria"
// 	]);
// });

// Route::get('kategori/delete/{id}', function ($id) {
// 	Kategori::find($id)->delete();
// });


// Route::get('/mahasiswa', function () {
// 	$mahasiswa = mahasiswa::all();
// 	foreach ($mahasiswa as $data) {
// 		echo $data->id . ". " . $data->nim . "<br>Nama : " . $data->nama . "<br>Kelas : " . $data->kelas . "<br>Deskripsi 	: " . $data->des . "<br><br>";
// 	}
// });

// Route::get('mahasiswa/tambah', function () {
// 	mahasiswa::create([
// 		'nama_mahasiswa' => "Pakaian Baru",
// 		'deskripsi' => "Semua Jenis pakaian baru"
// 	]);
// });