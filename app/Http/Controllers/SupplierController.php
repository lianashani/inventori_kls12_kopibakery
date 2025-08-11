<?php

namespace App\Http\Controllers;
use App\Models\Supplier;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view("home.supplier.index", compact("supplier"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view("home.supplier.tambah");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_supplier' => 'required|min:5',
            'alamat' => 'required',
            'no_telp' => 'required|numeric',
        ]);

        supplier::create($request->all());
        return redirect('/supplier')->with('success','');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $supplier = Supplier::find($id);
        return view('home.supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_supplier' => 'required|min:5',
            'alamat' => 'required',
            'no_telp' => 'required|numeric',
        ]);

    $supplier = Supplier::find($id);
    $supplier->update($request->all());
    return redirect('/supplier')->with('success','Supplier berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */

}
