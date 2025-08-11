@extends('layouts.master')
@section('content')

   <div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Halaman Tambah Data Jenis</h1>
                            <br>
                        </div>
                        <div class="card-body">

                            <div class="container-fluid">
                            <a class="btn btn-outline-primary" btn href="/jenis">Kembali</a>
                            <br><br>
                             <form action="/jenis/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Jenis</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_jenis"
                                        id="nama_jenis"
                                        value="{{old('nama_jenis')}}"
                                        aria-describedby="helpId"

                                    />
                                </div>
                                @error('nama_jenis')
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
