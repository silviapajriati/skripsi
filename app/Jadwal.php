<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = "tbl_detail_jadwal";

    protected $primaryKey = 'id_jadwal';

    protected $fillable = ['kode_kelas', 'nip', 'kode_mapel','jam_selesai','jam_mulai','hari'];
}
