<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    // karena menggunakan fungsi create pd controller utk create data
    // maka kita wajib menambahkan baris dibawah.
    protected $fillable = ['nama','alamat'];
    // bagian ini disebut juga dgn Mass Assignment pd laravel. dimana
    // kita bisa mem-filter kolom mana saja yg boleh diinput.
    // pada latihan ini kita hanya memperbolehkan penginputan nama dan alamat, yg lainnya tdk diperbolehkan
}
