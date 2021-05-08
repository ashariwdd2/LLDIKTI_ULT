<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoketController extends Controller
{
    public function index()
    {
   // mengambil data dari table pegawai
   $blogs = DB::table('blogs')->get();
 
   // mengirim data pegawai ke view index
   return view('welcome',['blogs' => $blogs]);
}
}