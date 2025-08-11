@extends('layouts.master')
@section('content')

   <div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Halaman Tambah Data User</h1>
                            <br>
                        </div>
                        <div class="card-body">

                            <div class="container-fluid">
                            <a class="btn btn-outline-primary" btn href="/user">Kembali</a>
                            <br><br>
                             <form action="/user/simpan" method="post">
                                @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Nama</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    id="name"
                                    value="{{old('name')}}"
                                    aria-describedby="helpId"

                                />
                            </div>

                            @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{$message}}
                                    </div>
                                    @enderror

                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    id="email"
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                            </div>

                            @error('email')
                            <div class="alert alert-danger mt-2">
                                {{$message}}
                            </div>
                            @enderror

                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="password"
                                    id="password"
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                            </div>
                            @error('password')
                            <div class="alert alert-danger mt-2">
                                {{$message}}
                            </div>
                            @enderror

                            <div class="mb-3">
                                <label for="" class="form-label">Role</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="role"
                                    id="role"
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                            </div>
                            @error('role')
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
