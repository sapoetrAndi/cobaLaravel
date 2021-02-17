<?php

use Illuminate\Support\Facades\Route;

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


// untuk menampilkan view sederhana tanpa proses bisnis yang kompleks
/* Route::get('/', function () {

    //mengembalikan view dari halaman index
    return view('index');
});

Route::get('/about', function () {

    $nama = "andi saputra";

    //mengembalikan view dari halaman about
    //kita juga bisa mengirimkan data ke view menggunakan parameter
    return view('about', ['nama' => $nama]);
});

Route::get('/mahasiswa', function () {

    //mengembalikan view dari halaman mahasiswa
    return view('mahasiswa');
}); */

//route ini akan mengarah ke controller PagesController method Home
Route::get('/', 'PagesController@home');
//route ini akan mengarah ke controller PagesController method about
Route::get('/about', 'PagesController@about');


Route::get('/mahasiswa', 'MahasiswaController@index');
/* 
//Students
Route::get('/students', 'StudentsController@index'); //route untuk menampilkan seluruh data mahasiswa
Route::get('/students/create', 'StudentsController@create'); //route untuk menampilkan form tambah data
Route::get('/students/{student}', 'StudentsController@show'); //route untuk menampilkan detail mahasiswa
//mengambil data menggunakan method post dan dikirim ke controller StudentController method store
Route::post('/students', 'StudentsController@store'); //route untuk melakukan tambah data
Route::delete('/students/{student}', 'StudentsController@destroy'); //route untuk melakukan hapus data
Route::get('/students/{student}/edit', 'StudentsController@edit'); //route untuk mengarahkan keform edit
Route::patch('/students/{student}', 'StudentsController@update');//route untuk melakaukan edit data
 */
//route ini bisa menggantikan semua route Students diatas
Route::resource('students', 'StudentsController');
