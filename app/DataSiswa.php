<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    protected $table = "data_siswa";

    protected $primaryKey = 'id';

    protected $fillable = ['nis', 'nama_siswa','no_telp','tempat_lahir','tanggal_lahir','alamat','nama_ibu','nama_ayah'];
}
