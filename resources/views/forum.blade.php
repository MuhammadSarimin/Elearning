@extends('get.nav-side-mhs')

@section('title','Ini Judul Diskusi')
<style>
  .diskusi{
    margin:30px 20px auto 20px;
  }
  .border-hidden{
    border: none !important;
  }

</style>
@section('content')
<div class="content-wrapper">

  
  <div class="row"> <!-- baris box diskusi -->
    <section class="col-md-11 connectedSortable diskusi">
      <div class="box box-success"> <!-- box diskusi -->
        <div class="box-header">
          <i class="fa fa-comments-o"></i>

          <h3 class="box-title">Diskusi</h3>

          <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
            <div class="btn-group" data-toggle="btn-toggle">
              <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
              </button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
            </div>
          </div>
        </div>
        <div class="box-body chat" id="chat-box">
          <!-- chat item -->
          <div class="item">
            <div class="item box-header">
              <img src="dist/img/user4-128x128.jpg" alt="user image" class="online">

              <p class="message">
                <a href="#" class="name">
                  <small class="text-muted pull-right">ini hari atau tanggal &nbsp;<i class="fa fa-clock-o"></i> 2:15</small>
                  Ini Nama yang Post
                </a>
              </p>
            </div>
            <div class="attachment">
              <div class="box box-default">
                <div class="box-header">

                  <h3 class="box-title"><b>Ini Berisi Judul Ini Berisi Judul Ini Berisi Judul Ini Berisi Judul Ini Berisi Judul Ini Berisi Judul </b></h3>


                </div>
                <div class="box-body chat" id="chat-box">
                  <!-- chat item -->
                  <div class="item">
                    <div class="attachment">
                      <h4>apa ini bisa mengupload atau mendownload foto ?</h4>

                      <p class="filename">
                        Theme-thumbnail-image.jpg
                      </p>

                      <div class="pull-right">
                        <button type="button" class="btn btn-success btn-sm btn-flat">Open</button>
                      </div>
                    </div>
                    <!-- /.attachment -->
                  </div>
            </div>
          </div>
            <!-- /.attachment -->
          </div>
          <!-- /.item -->

        </div>
        <!-- /.chat -->
          <div class="box-footer">
            <form>
              <div class="input-group" style="border: 1px solid #999; border-radius:8px; padding:10px;">
                <textarea type="text" class="form-control" rows="5" cols="160" style="resize:none; border:none;" placeholder="Tulis Komentar ..."></textarea>
                <div class="btn-group pull-right">
                  <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-folder-open text-green"></span></button>
                  <button type="button" class="btn btn-default btn-sm"><span class="fa fa-photo text-green"></span></button>
                </div>
              </div>
              <button class="btn btn-success pull-right" style="margin-top:5px;" type="button">Kirim</button>
            </form>
          </div>
        </div>
      </div> <!-- Akhir box diskusi -->
    </section>
  </div> <!-- Akhir baris box diskusi -->

  <div class="row">
    <div class="col-md-11 connectedSortable diskusi">
      <div class="box box-danger">

        <div class="box-header">
          <i class="fa fa-comments-o"></i>
          <h3 class="box-title">Komentar</h3>
          <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
            <div class="btn-group" data-toggle="btn-toggle">
              <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
              </button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
            </div>
          </div>
        </div>

        <div class="box-body chat" id="chat-box">
          <!-- chat item -->
          <div class="item">
            <div class="item box-header">
              <img src="dist/img/user4-128x128.jpg" alt="user image" class="online">

              <p class="message">
                <a href="#" class="name">
                  <small class="text-muted pull-right">ini hari atau tanggal &nbsp;<i class="fa fa-clock-o"></i> 2:15</small>
                  Ini Nama yang Berkomentar
                </a>
              </p>
            </div>
            <div class="attachment">
              <div class="box box-default">
                <div class="box-body chat" id="chat-box">
                  <!-- chat item -->
                  <div class="item">
                      <h4>apa ini bisa mengupload atau mendownload foto ?</h4>

                      <p class="filename">
                        Theme-thumbnail-image.jpg
                      </p>
                  </div>
                </div>
              </div>
            <!-- /.attachment -->
          </div>
          <!-- /.item -->

        </div>
        </div>

      </div>
    </div>
  </div>

</div>

@endsection
