<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class MasyarakatController extends Controller
{
    function data_masyarakat(){
        $daftar = "Data Masyarakat";
        $masyarakat =  DB::table('masyarakat')->get();

        return view('data-masyarakat',['masyarakat'=>$masyarakat, 'df'=>$daftar]);
    }


    function daftar_masyarakat(request $request){

        $nik = $request->nik;
        $nama = $request->nama;
        $user = $request->un;
        $pass = $request->pass;
        $telp = $request->telp;
        $masyarakat = DB::table('masyarakat')->insert([
            'nik' => $nik,
            'nama' => $nama,
            'username' => $user,
            'password' => $pass,
            'telp' => $telp
        ]);

        return redirect('/login');
    }

}