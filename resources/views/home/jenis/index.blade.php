@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                                <h1>Halaman Data Jenis</h1>
                                <a href="/jenis/tambah" class="btn btn-outline-primary">Tambah</a>
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
                                            <th scope="col">ID Jenis</th>
                                            <th scope="col">Nama Jenis</th>
                                            <th scope="col">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($jenis as $jenis)
                                        <tr class="">
                                            <td scope="row">{{$loop->iteration}}</td>
                                            <td>{{$jenis->nama_jenis}}</td>

                                            <td>
                                                <a class="btn btn-outline-warning" href="/jenis/edit/{{$jenis->id}}">Edit</a>

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
