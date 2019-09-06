<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class KelasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $data = Kelas::where('kode_kelas', 'LIKE', "%$keyword%")
                ->orWhere('kelas', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $data = Kelas::latest()->paginate($perPage);
        }

        return view('datakelas', compact('data'));
        
    }

    public function create()
    {   
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        
        Kelas::create($requestData);

        return redirect('kelas')->with('flash_message', 'Data Kelas Ditambahkan');
    }

    public function edit($id_kelas)
    {
        $data = Kelas::findOrFail($id_kelas);

        return view('kelas.edit', compact('data'));
    }

    public function update(Request $request, $id_kelas)
    {
        
        $requestData = $request->all();
        
        $data = Kelas::findOrFail($id_kelas);
        $data->update($requestData);

        return redirect('kelas')->with('flash_message', 'Data Kelas updated!');
    }

    public function destroy($id_kelas)
    {
        Kelas::destroy($id_kelas);

        return redirect('kelas')->with('flash_message', 'Data Kelas deleted!');
    }
}
