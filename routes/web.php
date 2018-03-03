<?php


Route::get('/', function () {
    return view('list_forum');
});

Route::get('ambilmk', function () {
    return view('show-mhs.mhs-permintaan-mk');
});

Route::get('ubahmk', function () {
    return view('show-mhs.mhs-permintaan-mk');
});

Route::get('lihatmk', function () {
    return view('show-mhs.mhs-lihat-mk');
});

Route::get('materi', function () {
    return view('show-mhs.mhs-materi');
});

Route::get('tugas', function(){
  return view('show-mhs.mhs-tugas');
});

Route::get('quis', function(){
  return view('show.mhs-quis');
});

Route::get('forum', function(){
  return view('list_forum');
});

Route::get('chat', function(){
  return view('show.mhs-chat');
});

Route::get('profil', function(){
  return view('show.mhs-profil');
});

Route::get('ubah-pass', function(){
  return view('show.mhs-pubah-pass');
});
Route::get('logout', function(){
  return view('show.mhs-logout');
});
