<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Jenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view("home.barang.index", compact('barang'));
    }

    public function create()
    {
        $jenis = Jenis::all();
        return view('home.barang.tambah', compact('jenis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_barang' => 'required|min:5',
            'id_jenis' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/products', $image->hashName());

        Barang::create([
            'gambar' => $image->hashName(),
            'nama_barang' => $request->nama_barang,
            'id_jenis' => $request->id_jenis,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'stok' => $request->stok,
        ]);

        return redirect('/barang')->with('success', 'Barang berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $jenis = Jenis::all();
        // $model = Model::findOrFail($id);
        $barang = Barang::find($id);
        return view('home.barang.edit', compact('barang', 'jenis'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'gambar' => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama_barang' => 'required|min:5',
            'id_jenis' => 'required|exists:jenis,id',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        // $model = Model::findOrFail($id);
        // $model->id_jenis = $request->input('id_jenis');
        // $model->save();

        $barang = Barang::find($id);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $image->storeAs('public/products', $image->hashName());

            if ($barang->gambar) {
                Storage::delete('public/products/' . $barang->gambar);
            }

            $barang->update([
                'gambar' => $image->hashName(),
                'nama_barang' => $request->nama_barang,
                'id_jenis' => $request->id_jenis,
                'harga_beli' => $request->harga_beli,
                'harga_jual' => $request->harga_jual,
                'stok' => $request->stok,
            ]);
        } else {
            $barang->update([
                'nama_barang' => $request->nama_barang,
                'id_jenis' => $request->id_jenis,
                'harga_beli' => $request->harga_beli,
                'harga_jual' => $request->harga_jual,
                'stok' => $request->stok,
            ]);
        }

        return redirect('/barang')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy(string $id)
    {
        $barang = Barang::find($id);

        if ($barang) {
            Storage::delete('public/products/' . $barang->gambar);
            $barang->delete();
            return redirect('/barang')->with('success', 'Data Berhasil Dihapus!');
        }

        return redirect('/barang')->with('error', 'Data tidak ditemukan!');
    }
}
