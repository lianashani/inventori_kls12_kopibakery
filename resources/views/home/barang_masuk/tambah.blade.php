@extends('layouts.master')
@section('content')

   <div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Halaman Tambah Data Barang Masuk</h1>
                            <br>
                        </div>
                        <div class="card-body">

                            <div class="container-fluid">
                            <a class="btn btn-outline-primary" btn href="/barang_masuk">Kembali</a>
                            <br><br>
                             <form action="/barang_masuk/simpan" method="post">
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
                                    <label for="" class="form-label">ID Supplier</label>
                                    <select class="form-control" name="id_supplier" id="id_supplier">
                                        @foreach ($supplier as $supplier)
                                        <option value="{{$supplier->id}}">{{$supplier->nama_supplier}}</option>
                                        @endforeach
                                    </select>
                                </div>

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
