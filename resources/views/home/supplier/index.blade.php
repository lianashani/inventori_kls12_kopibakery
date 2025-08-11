@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                                <h1>Halaman Data Supplier</h1>
                                <a href="/supplier/tambah" class="btn btn-outline-primary">Tambah</a>
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
                                            <th scope="col">Nama Supplier</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No Telp</th>
                                            <th scope="col">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($supplier as $supplier)
                                        <tr class="">
                                            <td scope="row">{{$loop->iteration}}</td>
                                            <td>{{$supplier->nama_supplier}}</td>
                                            <td>{{$supplier->alamat}}</td>
                                            <td>{{$supplier->no_telp}}</td>


                                            <td>
                                                <a class="btn btn-outline-warning" href="/supplier/edit/{{$supplier->id}}">Edit</a>

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
