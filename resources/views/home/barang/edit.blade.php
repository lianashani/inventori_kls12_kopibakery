@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Halaman Edit Data Barang</h1>
                            <br>
                        </div>
                        <div class="card-body">

                            <div class="container-fluid">
                            <a class="btn btn-outline-primary" btn href="/barang">Kembali</a>
                             <form action="/barang/update/{{$barang->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Gambar</label>
                                    <input
                                        value="{{$barang->gambar}}"
                                        type="file"
                                        class="form-control"
                                        name="gambar"
                                        id="gambar"
                                        aria-describedby="helpId"

                                    />
                                    @error('gambar')
                                    <div class="alert alert-danger mt-2">{{ $message }}
                                    </div>
                                    @enderror

                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Barang</label>
                                    <input
                                        value="{{$barang->nama_barang}}"
                                        type="text"
                                        class="form-control"
                                        name="nama_barang"
                                        id="nama_barang"
                                        value="{{ old('nama_barang',$barang->nama_barang)}}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('nama_barang')
                                    <div class="alert alert-danger mt-2">{{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="id_jenis" class="form-label">Id Jenis</label>
                                    <select class="form-control" name="id_jenis" id="id_jenis">
                                        @foreach ($jenis as $jenis)
                                            <option value="{{ $jenis->id }}" {{$jenis->id == $jenis->id ? 'selected' : ''}}>
                                                {{ $jenis->id}} -
                                                {{ $jenis->nama_jenis }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>




                                @error('id_jenis')
                                    <div class="alert alert-danger mt-2">
                                        {{$message}}
                                    </div>
                                    @enderror

                                <div class="mb-3">
                                    <label for="" class="form-label">Harga Beli</label>
                                    <input
                                    value="{{$barang->harga_beli}}"
                                        type="number"
                                        class="form-control"
                                        name="harga_beli"
                                        id="harga_beli"
                                        value="{{old('harga_beli')}}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('harga_bali')
                                    <div class="alert alert-danger mt-2">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Harga Jual</label>
                                    <input
                                    value="{{$barang->harga_jual}}"
                                        type="number"
                                        class="form-control"
                                        name="harga_jual"
                                        id="harga_jual"
                                        value="{{old('harga_jual')}}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('harga_jual')
                                    <div class="alert alert-danger mt-2">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Stok</label>
                                    <input
                                    value="{{$barang->stok}}"
                                        type="number"
                                        class="form-control"
                                        name="stok"
                                        id="stok"
                                        value="{{old('stok')}}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('stok')
                                    <div class="alert alert-danger mt-2">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
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
