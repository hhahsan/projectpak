<?php

namespace App\Http\Controllers;

use App\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function show()
    {
        return view('user.dataPengajuan');
    }

    public function create()
    {  
        
        return view('user.tambahPengajuan');
    }

    public function store(Request $request)
    {
        $pengajuan = new Pengajuan;
        $pengajuan->user_id = '1';
        $pengajuan->periode_id = '2';
        $pengajuan->pendidikan_terakhir = $request->pendidikan_terakhir;
        $pengajuan->jurusan = $request->jurusan;
        $pengajuan->tahun_lulus = $request->tahun_lulus;
        $pengajuan->pangkat_golongan = $request->pangkat_golongan;
        $pengajuan->tmt = $request->tmt;
        $pengajuan->gol_tahun = $request->gol_tahun;
        $pengajuan->gol_bulan = $request->gol_bulan;
        $pengajuan->awal_penilaian = $request->awal_penilaian;
        $pengajuan->jenis_guru = $request->jenis_guru;
        $pengajuan->tugas = $request->tugas;
        $pengajuan->alamat_sekolah = $request->alamat_sekolah;
        $pengajuan->kec_sekolah = $request->kec_sekolah;
        $pengajuan->kab_sekolah = $request->kab_sekolah;

        $pengajuan->save();
        return redirect('/data-pengajuan');
    }
}
