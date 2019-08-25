<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataSiswa;

class DataSiswaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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

        // $data = DataSiswa::all();
        // return view('datasiswa',['data' => $data]);

        if (!empty($keyword)) {
            $data = DataSiswa::where('nis', 'LIKE', "%$keyword%")
                ->orWhere('nama_siswa', 'LIKE', "%$keyword%")
                // ->orWhere('no_telp', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $data = DataSiswa::latest()->paginate($perPage);
        }

        return view('datasiswa', compact('data'));
        
    }

    public function create()
    {   
        return view('siswa.create');
    }

    public function siswa(Request $request){
        Request::json()->all();

        //Return json data to your view script like this:
        return response()->json(['nis'=>$nis, 'nama_siswa'=>$nama_siswa]);
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        
        DataSiswa::create($requestData);

        return redirect('siswa')->with('flash_message', 'Data Siswa Ditambahkan');
    }

    public function edit($id)
    {
        $siswa = DataSiswa::findOrFail($id);

        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $siswa = DataSiswa::findOrFail($id);
        $siswa->update($requestData);

        return redirect('siswa')->with('flash_message', 'Data Siswa updated!');
    }

    public function destroy($id)
    {
        DataSiswa::destroy($id);

        return redirect('siswa')->with('flash_message', 'Data Siswa deleted!');
    }

}
