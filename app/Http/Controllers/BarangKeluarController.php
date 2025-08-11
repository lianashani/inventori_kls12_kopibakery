<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;

use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{

    public function index()
    {
        $barangKeluar = BarangKeluar::all();
        return view('home.barang_keluar.index' , compact('barangKeluar') );
    }

    public function create()
    {
        $barang = Barang::all();
        return view('home.barang_keluar.tambah' , compact('barang') );
    }

    public function edit(string $id)
    {
        $barangKeluar = BarangKeluar::find($id);
        return view("home.barang_keluar.edit" , compact("barangKeluar") );
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_barang'=>'required',
            'nama_customer'=>'required',
            'jumlah'=>'required',
        ]);

        $id = $request->id_barang;
        $barang = Barang::find($id);

        if ($barang->stok < $request->jumlah) {
            return redirect('/barang_keluar')->with('error','Stok barang tidak mencukupi !');
        }

        $barang->decrement('stok', $request->jumlah);
        BarangKeluar::create([
            'id_barang'=>$request->id_barang,
            'nama_customer'=>$request->nama_customer,
            'jumlah'=>$request->jumlah,
        ]);
        return redirect("/barang_keluar")->with("success","Barang keluar berhasil ditambahkan");
        }

        public function laporan()
        {
            $barangKeluar = BarangKeluar::all();

            return view("home.barang_keluar.laporan", compact("barangKeluar"));
        }


        public function struk(string $id)
        {
            $barangkeluar = BarangKeluar::find($id);
            return view('home.barang_keluar.struk', [
                'barangkeluar' => $barangkeluar,
                'jumlah_bayar' => $barangkeluar->jumlah * $barangkeluar->barang->harga,
                'tgl_pembayaran' => $barangkeluar->created_at->format('d-m-Y'),
            ]);
        }


}
