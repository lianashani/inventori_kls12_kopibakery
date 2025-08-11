@extends('layouts.master')
@section('title', 'dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$barangCount}}</h3>

                <p>Barang</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-cart"></i>
              </div>
              <a href="barang" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$barangmasukCount}}</h3>

                <p>Barang Masuk</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-plus"></i>
              </div>
              <a href="barang_masuk" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$barangkeluarCount}}</h3>

                <p>Barang Keluar</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-minus"></i>
              </div>
              <a href="barang_keluar" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$userCount}}</h3>

                <p>User</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
    </section>


    <section class="content">
    <div class="row" >
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Stok Barang</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="datatable">
                        <thead>
                          <tr>
                            <th style="width: 50px">No</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th style="width: 150px;">Status</th> <!-- Align header center -->
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($barangList as $item)
                          <tr>
                            <td>{{ $loop->iteration }}</td> <!-- Display row number -->
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ $item->stok }}</td>
                            <td style="text-align: center;"> <!-- Center the badge -->
                              @if($item->stok >= 100)
                              <span class="badge badge-success" style="padding: 5px 20px; font-size: 1em;">Baik</span> <!-- Green indicator, larger size -->
                              @else
                              <span class="badge badge-danger" style="padding: 5px 20px; font-size: 1 em;">Buruk</span> <!-- Red indicator, larger size -->
                              @endif
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>History Barang Masuk</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="datatablemasuk">
                        <thead>
                          <tr>
                            <th style="width: 50px">No</th>
                            <th>Nama Barang</th>
                            <th>Nama Suplier</th>
                            <th>Jumlah</th>
                            <th>Tanggal</th> <!-- Align header center -->
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($barangmasuk as $barangmasuk)
                          <tr class="table-active"  >
                            <td>{{ $loop->iteration }}</td> <!-- Display row number -->
                            <td>{{ $barangmasuk->barang->nama_barang}}</td>
                            <td>{{ $barangmasuk->supplier->nama_supplier}}</td>
                            <td>{{ $barangmasuk->jumlah }}</td>
                            <td>{{ $barangmasuk->created_at }}</td>

                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>History Barang Keluar</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="datatablekeluar">
                        <thead>
                          <tr>
                            <th style="width: 50px">No</th>
                            <th>Nama Barang</th>
                            <th>Nama Customer</th>
                            <th>Jumlah</th>
                            <th>Tanggal</th> <!-- Align header center -->
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($barangkeluar as $barangkeluar)
                          <tr class="table-active"  >
                            <td>{{ $loop->iteration }}</td> <!-- Display row number -->
                            <td>{{ $barangkeluar->barang->nama_barang}}</td>
                            <td>{{ $barangkeluar->nama_customer}}</td>
                            <td>{{ $barangkeluar->jumlah }}</td>
                            <td>{{ $barangkeluar->created_at }}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>

    </div>
    </section>

  </div>

@endsection
