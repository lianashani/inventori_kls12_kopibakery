@extends('layouts.master')
@section('title', 'barangmasuk')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card" style="margin-left: 21px; margin-right: 21px">
                <div class="card-header">
                    <h1>Halaman Data Barang Masuk</h1>
                </div>
                <div class="row">
                    <!-- Card Body for Image -->
                    <div class="col-md-4" style="border-right: 2px solid #dee2e6;">
                        <div class="card-body box-profile" style="display: flex; align-items: center; justify-content: center;">
                            <img src="{{ asset('/storage/products/'.$barangMasuk->barang->gambar)}}"
                                 class="rounded" style="width: 100%; max-width: 300px; height: auto;">
                        </div>
                    </div>
                    <!-- Card Body for Description -->
                    <div class="col-md-8">
                        <div class="card-body box-profile">
                            <h2>{{$barangMasuk->barang->nama_barang}}</h2>
                            <p style="margin-bottom: 5px">{{$barangMasuk->created_at}}</p>
                            <hr style="border: none; border-top: 2px solid #dee2e6; margin: 10px 0;">
                            <p>Jumlah : {{$barangMasuk->jumlah}}</p>
                            <p>Harga : Rp. {{ number_format($barangMasuk->barang->harga_beli)}}</p>
                            <p>Supplier : {{$barangMasuk->supplier->nama_supplier}}</p>
                            <br>
                            <h3>Total : Rp. {{ number_format($barangMasuk->jumlah * $barangMasuk->barang->harga_beli)}}</h3>
                            <br>
                            <a class="btn btn-info" href="/barang_masuk">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
