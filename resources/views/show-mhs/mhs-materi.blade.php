@extends('get.nav-side-mhs')
@section('title', 'Materi')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bahan Ajar
        <small>Teknik Informatika</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Bahan Ajar > Nama MK</a></li>
        <li class="active">Materi</li>
      </ol>
    </section>
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Daftar Materi</h3>
            </div>
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Materi</th>
                  <th>Pertemuan</th>
                  <th>Waktu Upload</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Programmable Logic Device</td>
                  <td>9</td>
                  <td>12/12/12 00:00</td>
                  <td><button type="button" class="btn btn-primary btn-sm">Unggah</button></td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
