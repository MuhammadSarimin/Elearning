<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PaginationController extends Controller
{
    public function pagination()
    {
        $mhs = DB::table('tuga')->paginate(10);
        return view('show.mhs-lihat-tugas', compact('tuga'));
    }
}
