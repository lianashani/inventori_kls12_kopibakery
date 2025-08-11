<?php

namespace App\Http\Controllers;
use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
        $jenis = jenis::all();
        return view("home.jenis.index", compact("jenis"));
    }

    public function create()
    {
        return view('home.jenis.tambah');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama_jenis' => 'required|min:4',
        ]);

        jenis::create($request->all());
        return redirect('/jenis')->with('success','Data Berhasil Disimpan!');
    }


    public function show($id)
    {
        $jenis = jenis::find($id);
        return view('home.jenis.edit', compact('jenis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jenis' => 'required|min:4',
        ]);

        jenis::find($id)->update($request->all());
        return redirect('/jenis')->with('success','Data Berhasil Diubah!');
    }


}



