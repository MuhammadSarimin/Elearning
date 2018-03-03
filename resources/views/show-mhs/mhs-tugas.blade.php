@extends('get.nav-side-mhs')
@section('title', 'Tuags')
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
        <li class="active">Tugas</li>
      </ol>
    </section>
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Daftar Tugas</h3>
            </div>
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama Tugas</th>
                  <th class="text-center">Nomor Tugas</th>
                  <th class="text-center">Waktu Upload</th>
                  <th class="text-center">deadline</th>
                  <th class="text-center">aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td class="text-center">PKM</td>
                  <td class="text-center">9</td>
                  <td class="text-center">12/12/12 00:00</td>
                  <td class="text-center">13/12/12 00:00</td>
                  <td>
                    <button type="button" class="btn btn-default btn-sm"><span class="fa fa-cloud-download text-blue"></span></button>
                    <button type="button" class="btn btn-default btn-sm pull-right"><span class="fa fa-cloud-upload text-blue"></span></button>
                  </td>
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
