<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    protected $table = "tbl_orangtua";

    protected $primaryKey = 'nio';

    protected $fillable = ['nio', 'nama_ortu','alamat','no_telp','nis'];
}
