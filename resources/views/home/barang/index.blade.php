@extends('layouts.master')
@section('title','barang')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @if (session('success'))
                            <div class="alert alert-info">
                                {{ session('success')}}
                            </div>
                            @endif
                                <h1>Halaman Data Barang</h1>
                                <a href="/barang/tambah" class="btn btn-outline-primary">Tambah</a>
                        </div>
                        <div class="card-body">

                            <div
                                class="table-responsive"
                            >
                                <table
                                    class="table table-hover" id="datatable"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col"> Number</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">ID Jenis</th>
                                            <th scope="col">Harga Beli</th>
                                            <th scope="col">Harga Jual</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($barang as $barang)
                                        <tr class="">
                                            <td scope="row">{{$loop->iteration}}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('storage/products/' . $barang->gambar) }}" class="rounded" style="width: 150px">
                                            </td>
                                            <td>{{$barang->nama_barang}}</td>
                                            <td>{{$barang->jenis->nama_jenis}}</td>
                                            <td>Rp. {{number_format($barang->harga_beli)}}</td>
                                            <td>Rp. {{number_format($barang->harga_jual)}}</td>
                                            <td>{{$barang->stok}}</td>

                                            <td>
                                                <a class="btn btn-outline-warning" href="/barang/edit/{{$barang->id}}">Edit</a>
                                                <a class="btn btn-outline-danger" href="/barang/hapus/{{$barang->id}}">Hapus</a>

                                            </td>

                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
