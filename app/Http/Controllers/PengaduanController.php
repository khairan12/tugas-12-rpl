<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Pengaduan;

class PengaduanController extends Controller
{
    function index(){
        $judul ="selamat datang";
        $pengaduan = pengaduan::All();
        $pengaduan = DB::table('pengaduan')->get();

        return view('layouts.home',['Judul'=>$judul,'pengaduan'=>$pengaduan]);
    }


    function proses_isi_pengaduan(){
        $tampil = "data";

        return view('layouts.isi_pengaduan',['tampil'=>$tampil]);


    }


    function proses_tambah_pengaduan(Request $request){
        //validasi
       
        $request ->validate([
            'isi_laporan' => 'required|min:5'
        ]);
        $nama_foto=$request->foto->getClientoriginalName();
        $request->foto->storeAs('public/image',$nama_foto);


        $isi_pengaduan = $request->isi_laporan;
        $pengaduan = DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => '1',
            'isi_laporan' => $isi_pengaduan,
            'foto' => $request->foto->getClientoriginalName(),
            'status' => 'proses'
        ]);

        return redirect('/home');
    }

    function hapus($id){
        DB::table('pengaduan')->where('id_pengaduan','=',$id)->delete();
        return redirect()->back();
    }

    function detail($id){
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan','=', $id )->get();
        return view('/detail',['pengaduan'=> $pengaduan]);  

     }

    function update($id){
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan','=', $id )->first();
        return view('/update',['pengaduan'=> $pengaduan]);
    }
    

   

    function proses_update(request $request){
        $isi_pengaduan = $request->isi_laporan;
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan',$request->id)->update([
            'isi_laporan' => $isi_pengaduan

        ]);
        return redirect('/home');
    }

}