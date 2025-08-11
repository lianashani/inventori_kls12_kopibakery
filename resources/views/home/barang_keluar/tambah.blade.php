@extends('layouts.master')
@section('content')

   <div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Halaman Tambah Data Barang Keluar</h1>
                            <br>
                        </div>
                        <div class="card-body">

                            <div class="container-fluid">
                            <a class="btn btn-outline-primary" btn href="/barang_keluar">Kembali</a>
                            <br><br>
                             <form action="/barang_keluar/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">ID Barang</label>
                                    <select class="form-control" name="id_barang" id="id_barang">
                                        @foreach ($barang as $barang)
                                        <option value="{{$barang->id}}">{{$barang->nama_barang}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Customer</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_customer"
                                        id="nama_customer"
                                        value="{{old('nama_customer')}}"
                                        aria-describedby="helpId"

                                    />
                                </div>

                                @error('nama_customer')
                                <div class="alert alert-danger mt-2">
                                    {{$message}}
                                </div>
                                @enderror

                                <div class="mb-3">
                                    <label for="" class="form-label">Jumlah</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="jumlah"
                                        id="jumlah"
                                        value="{{old('jumlah')}}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                </div>
                                @error('jumlah')
                                <div class="alert alert-danger mt-2">
                                    {{$message}}
                                </div>
                                @enderror



                            <button class="btn btn-outline-success" type="submit">Kirim</button>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection
