<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;

class Jadwal1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $data = Jadwal::join('tbl_kelas', 'tbl_detail_jadwal.kode_kelas','=','tbl_kelas.kode_kelas')
                        ->join('tbl_mapel','tbl_detail_jadwal.kode_mapel','=','tbl_mapel.kode_mapel')
                        ->join('tbl_guru','tbl_detail_jadwal.nip','=','tbl_guru.nip')
                        ->where([['tbl_kelas.kelas', '=', 1],['tbl_detail_jadwal.kode_kelas', 'LIKE', "%$keyword%"]])
                        ->orwhere([['tbl_kelas.kelas', '=', 1],['hari', 'LIKE', "%$keyword%"]])
                        ->orwhere([['tbl_kelas.kelas', '=', 1],['mapel', 'LIKE', "%$keyword%"]])
                        ->orwhere([['tbl_kelas.kelas', '=', 1],['nama_guru', 'LIKE', "%$keyword%"]])
                        ->latest('tbl_detail_jadwal.hari','ASC')->paginate($perPage);
        } else {
            $data = Jadwal::join('tbl_kelas', 'tbl_detail_jadwal.kode_kelas','=','tbl_kelas.kode_kelas')
                        ->join('tbl_mapel','tbl_detail_jadwal.kode_mapel','=','tbl_mapel.kode_mapel')
                        ->join('tbl_guru','tbl_detail_jadwal.nip','=','tbl_guru.nip')
                        ->where('tbl_kelas.kelas', '=', 1)
                        ->latest('tbl_detail_jadwal.hari','ASC')->paginate($perPage);
        }

        return view('datajadwal1', compact('data'));
        
    }

    public function create()
    {   
        return view('jadwal1.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        
        Jadwal::create($requestData);

        return redirect('jadwal1')->with('flash_message', 'Data Jadwal Ditambahkan');
    }

    public function edit($id_p)
    {
        $data = Jadwal::findOrFail($id_p);

        return view('jadwal1.edit', compact('data'));
    }

    public function update(Request $request, $id_p)
    {
        
        $requestData = $request->all();
        
        $data = Jadwal::findOrFail($id_p);
        $data->update($requestData);

        return redirect('jadwal1')->with('flash_message', 'Data Jadwal updated!');
    }

    public function destroy($id_p)
    {
        Jadwal::destroy($id_p);

        return redirect('jadwal1')->with('flash_message', 'Data Jadwal deleted!');
    }
}
