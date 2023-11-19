<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "pengaduan";

    protected $fillable = ['tgl_pengaduan', 'nik', 'isi_laporan', 'foto', 'status'];

    /*
     *   'tgl_pengaduan' => date(),
            'nik' => '123',
            'isi_laporan' => $request->isi_laporan,
            'foto' => $nama,
            'status' => '0'
     */
}