<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\User;
use App\Models\Jenis;
use App\Models\Supplier;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;

class DashboardController extends Controller
{
    public function index()
    {
        $barangCount = Barang::count();  //card
        $barangList = Barang::all();  //tabel
        $userCount = User::count();   //card
        $barangmasukCount = BarangMasuk::count();  //card
        $barangkeluarCount = BarangKeluar::count();  //card
        $barangmasuk = BarangMasuk::all();  //tabel
        $barangkeluar = BarangKeluar::all();  //tabel

        return view('home.dashboard', compact('barangCount', 'barangList', 'userCount', 'barangmasukCount', 'barangkeluarCount', 'barangmasuk', 'barangkeluar'));
    }

}
