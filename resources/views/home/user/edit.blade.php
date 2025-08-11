@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Halaman Edit Data User</h1>
                            <br>
                        </div>
                        <div class="card-body">

                            <div class="container-fluid">
                            <a class="btn btn-outline-primary" btn href="/user">Kembali</a>
                             <form action="/user/update/{{$user->id}}" method="post">
                                @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Nama</label>
                                <input
                                    value="{{$user->name}}"
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
                                    value="{{$user->email}}"
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    id="email"
                                    value="{{old('email')}}"
                                    aria-describedby="helpId"
                                />
                            </div>
                            @error('email')
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
