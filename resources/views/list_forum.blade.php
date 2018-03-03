@extends('get.nav-side-mhs')

@section('title','Forum')
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

  <div class="row">
    <div class="col-md-11 connectedSortable diskusi">
      <div class="box box-primary">

        <div class="box-header">
          <i class="fa fa-comments-o"></i>
          <h3 class="box-title">Judul Baru</h3>
          <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
            <div class="btn-group" data-toggle="btn-toggle">
              <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
              </button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
            </div>
          </div>
        </div>

        <div class="box-body chat" id="chat-box">
          <form>
            <input type="text" class="form-control border-hidden" placeholder="Judul permasalahan...">
            <hr style="margin-top:0px;">
            <textarea class="form-control border-hidden" rows="5" style="resize:none" placeholder="isi permasalahan..."></textarea>
            <hr style="margin-bottom:3px;">
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-folder-open text-blue"></span></button>
                <button type="button" class="btn btn-default btn-sm"><span class="fa fa-photo text-blue"></span></button>
              </div>
            </form>
          <div class="box-footer">
            <div class="pull-right">
              <button type="button" class="btn btn-primary btn-sm">Kirim</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection
