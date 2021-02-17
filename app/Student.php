<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{

    //mengimplementasikan soft delete
    use SoftDeletes;

    //mass assignment untuk menjaga database agar tidak sembarang orang dapat menambah data
    /* mass assignment: $fillable bertujuan untuk menandai field mana saja yang boleh diisi oleh user pada database, sedangkan $guarded kebalikan dari $fillable dimana field yang disimpan di dalam array adalah field yang tidak boleh diisi manual oleh user */
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];




    /*     jika nama primary key tidak megikuti convention laravel (buat sendiri)
    protected $primaryKey = 'id_mhs'; */

    /* jika nama table tidak mengikuti convention(saran) dari laravel / beda antara nama migration dan model
    protected $table = 'mahasiswa'; */
}

// ini adalah sebuah model di laravel
