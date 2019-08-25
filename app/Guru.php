<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = "tbl_guru";

    protected $primaryKey = 'id_guru';

    protected $fillable = ['nip', 'nama_guru','alamat','no_telp','status','pendidikan','tempat_lahir','tanggal_lahir'];
}
