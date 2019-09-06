<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = "tbl_pengumuman";

    protected $primaryKey = 'id_p';

    protected $fillable = ['judul','detail','tgl'];
}
