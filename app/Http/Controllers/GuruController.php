<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
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
            $data = Guru::where('nip', 'LIKE', "%$keyword%")
                ->orWhere('nama_guru', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $data = Guru::latest()->paginate($perPage);
        }

        return view('dataguru', compact('data'));
        
    }

    public function create()
    {   
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        
        Guru::create($requestData);

        return redirect('guru')->with('flash_message', 'Data Guru Ditambahkan');
    }

    public function edit($id_guru)
    {
        $data = Guru::findOrFail($id_guru);

        return view('guru.edit', compact('data'));
    }

    public function update(Request $request, $id_guru)
    {
        
        $requestData = $request->all();
        
        $data = Guru::findOrFail($id_guru);
        $data->update($requestData);

        return redirect('guru')->with('flash_message', 'Data Guru updated!');
    }

    public function destroy($id_guru)
    {
        Guru::destroy($id_guru);

        return redirect('guru')->with('flash_message', 'Data Guru deleted!');
    }

}
