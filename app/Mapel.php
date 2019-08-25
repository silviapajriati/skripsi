<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = "tbl_mapel";

    protected $primaryKey = 'id_mapel';

    protected $fillable = ['id_mapel', 'kode_mapel','mapel','kelas'];
}
