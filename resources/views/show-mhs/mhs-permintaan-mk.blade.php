@extends('get.nav-side-mhs')
@section('title', 'Permintaan Mata Kuliah')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Matakuliah
        <small>Teknik Informatika</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Mata Kuliah</a></li>
        <li class="active">Permintaan Mata Kuliah</li>
      </ol>
    </section>
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Mata Kuliah yang di Ambil</h3>
            </div>
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th class="text-center">Aksi</th>
                  <th class="text-center">Nama Mata Kuliah</th>
                  <th class="text-center">SKS</th>
                  <th class="text-center">Semester</th>
                  <th class="text-center">Dosen Pengampu</th>
                  <th class="text-center">Wajib/Pilihan</th>
                  <th class="text-center">hari</th>
                  <th class="text-center">waktu</th>
                  <th class="text-center">Jumlah Peminat</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="text-center">
                    <button type="button" class="btn btn-success btn-sm">Batalkan</button>
                  </td>
                  <td class="text-center">Pemograman Web</td>
                  <td class="text-center">4</td>
                  <td class="text-center">4</td>
                  <td class="text-center">Alena Uperati</td>
                  <td class="text-center">Wajib</td>
                  <td class="text-center">selasa</td>
                  <td class="text-center">00.00-00.00</td>
                  <td class="text-center">34</td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pilih Mata Kuliah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th class="text-center">Aksi</th>
                  <th class="text-center">Nama Mata Kuliah</th>
                  <th class="text-center">Nama Mata Kuliah</th>
                  <th class="text-center">SKS</th>
                  <th class="text-center">Semester</th>
                  <th class="text-center">Dosen Pengampu</th>
                  <th class="text-center">Wajib/Pilihan</th>
                  <th class="text-center">hari</th>
                  <th class="text-center">waktu</th>
                  <th class="text-center">Jumlah Peminat</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="text-center">
                    <button type="button" class="btn btn-primary btn-sm">pilih</button>
                  </td>
                  <td class="text-center">Pemograman Web</td>
                  <td class="text-center">4</td>
                  <td class="text-center">4</td>
                  <td class="text-center">Alena Uperati</td>
                  <td class="text-center">Wajib</td>
                  <td class="text-center">selasa</td>
                  <td class="text-center">00:00-00:00</td>
                  <td class="text-center">34</td>
                </tr>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
