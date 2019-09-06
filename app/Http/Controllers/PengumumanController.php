<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
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
            $data = Pengumuman::where('judul', 'LIKE', "%$keyword%")
                ->orWhere('detail', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $data = Pengumuman::latest()->paginate($perPage);
        }

        return view('pengumuman', compact('data'));
        
    }

    public function create()
    {   
        return view('pengumuman.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        
        Pengumuman::create($requestData);

        return redirect('pengumuman')->with('flash_message', 'Data pengumuman Ditambahkan');
    }

    public function edit($id_p)
    {
        $data = Pengumuman::findOrFail($id_p);

        return view('pengumuman.edit', compact('data'));
    }

    public function update(Request $request, $id_p)
    {
        
        $requestData = $request->all();
        
        $data = Pengumuman::findOrFail($id_p);
        $data->update($requestData);

        return redirect('pengumuman')->with('flash_message', 'Data pengumuman updated!');
    }

    public function destroy($id_p)
    {
        Pengumuman::destroy($id_p);

        return redirect('pengumuman')->with('flash_message', 'Data pengumuman deleted!');
    }
}
