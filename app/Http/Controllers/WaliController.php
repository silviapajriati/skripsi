<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wali;

class WaliController extends Controller
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
            $data = Wali::where('nio', 'LIKE', "%$keyword%")
                ->orWhere('nama_ortu', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $data = Wali::latest()->paginate($perPage);
        }

        return view('datawali', compact('data'));
        
    }

    public function create()
    {   
        return view('wali.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        
        Wali::create($requestData);

        return redirect('wali')->with('alert', 'Data Wali Murid Ditambahkan');
    }

    public function edit($nio)
    {
        $data = Wali::findOrFail($nio);

        return view('wali.edit', compact('data'));
    }

    public function update(Request $request, $nio)
    {
        
        $requestData = $request->all();
        
        $data = Wali::findOrFail($nio);
        $data->update($requestData);

        return redirect('wali')->with('flash_message', 'Data Wali updated!');
    }

    public function destroy($nio)
    {
        Wali::destroy($nio);

        return redirect('wali')->with('flash_message', 'Data Wali deleted!');
    }

}
