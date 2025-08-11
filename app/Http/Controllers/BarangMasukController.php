<?php

namespace App\Http\Controllers;
use App\Models\BarangMasuk;
use App\Models\Barang;
use App\Models\Supplier;

use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $barangMasuk = BarangMasuk::all();
    return view("home.barang_masuk.index" , compact('barangMasuk') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $barang = Barang::all();
    $supplier = Supplier::all();
     return view("home.barang_masuk.tambah" , compact("barang", "supplier") );
    }

    public function edit(string $id)
    {
        $barangMasuk = BarangMasuk::find($id);
        return view("home.barang_masuk.edit" , compact("barangMasuk") );
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'id_barang'=>'required',
        'id_supplier'=>'required',
        'jumlah'=>'required',
    ]);

    $id = $request->id_barang;
    $barang = Barang::find($id);
    $barang->increment('stok', $request->jumlah);

    BarangMasuk::create([
        'id_barang'=>$request->id_barang,
        'id_supplier'=>$request->id_supplier,
        'jumlah'=>$request->jumlah,
    ]);
    return redirect("/barang_masuk")->with("success","Barang masuk berhasil ditambahkan");
    }

    public function laporan()
        {
            $barangMasuk = BarangMasuk::all();

            return view("home.barang_masuk.laporan", compact("barangMasuk"));
        }

        public function struk(string $id)
        {
            $barangmasuk = BarangMasuk::find($id);
        return view('home.barang_masuk.struk', [
            'barangmasuk' => $barangmasuk,
            'jumlah_bayar' => $barangmasuk->jumlah * $barangmasuk->barang->harga,
            'tgl_pembayaran' => $barangmasuk->created_at->format('d-m-Y'),
            ]);
        }





}
