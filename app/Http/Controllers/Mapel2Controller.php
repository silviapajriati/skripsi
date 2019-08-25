<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;

class Mapel2Controller extends Controller
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
            $data = Mapel::where([['kelas','=','2'] , ['kode_mapel', 'LIKE', "%$keyword%"]])
                        ->orWhere([['kelas','=','2'] , ['mapel', 'LIKE', "%$keyword%"]])
                        ->latest()->paginate($perPage);
        } else {
            $data = Mapel::where('kelas', '=', "2")
                ->latest()->paginate($perPage);
        }

        return view('datamapel2', compact('data'));
        
    }

    public function create()
    {   
        return view('mapel2.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        
        Mapel::create($requestData);

        return redirect('mapel2')->with('alert', 'Data Mapel Ditambahkan');
    }

    public function edit($id_mapel)
    {
        $data = Mapel::findOrFail($id_mapel);

        return view('mapel2.edit', compact('data'));
    }

    public function update(Request $request, $id_mapel)
    {
        
        $requestData = $request->all();
        
        $data = Mapel::findOrFail($id_mapel);
        $data->update($requestData);

        return redirect('mapel2')->with('flash_message', 'Data Mapel updated!');
    }

    public function destroy($id_mapel)
    {
        Mapel::destroy($id_mapel);

        return redirect('mapel2')->with('flash_message', 'Data Mapel deleted!');
    }
}
