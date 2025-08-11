@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                                <h1>Halaman Data Barang Keluar</h1>
                                <a href="/barang_keluar/tambah" class="btn btn-outline-primary">Tambah</a>
                                <a href="/barang_keluar/laporan" class="btn btn-outline-secondary" target="_blank">Cetak Laporan</a>
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
                                            <th scope="col">Id Barang</th>
                                            <th scope="col">Nama Customer</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($barangKeluar as $barang_keluar)
                                        <tr class="">
                                            <td scope="row">{{$loop->iteration}}</td>
                                            <td>{{$barang_keluar->barang->nama_barang}}</td>
                                            <td>{{$barang_keluar->nama_customer}}</td>
                                            <td>{{ $barang_keluar->jumlah }}</td>
                                            <td><a class="btn btn-outline-secondary" href="/barang_keluar/edit/{{$barang_keluar->id}}">Detail</a>
                                            <a class="btn btn-outline-secondary" target="_blank" href="/barang_keluar/struk/{{$barang_keluar->id}}">Cetak Struk</a>
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
