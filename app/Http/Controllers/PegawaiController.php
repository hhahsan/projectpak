<?php

namespace App\Http\Controllers;

use App\Pengajuan;
use App\Periode;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('pegawai');
    }

    public function index()
    {
        $count = Pengajuan::all()->count();
        return view('pegawai.dashboard',[
            'periode' => Periode::orderBy('id','desc')->limit('1')->get(),
            'count' => Pengajuan::all()->count(),
        ]);
    }

    public function dataMasuk()
    {
        $datas = Pengajuan::with(['user','periode.pengajuan'])->get();
        return view('pegawai.dataMasuk',compact('datas'));
    }

    public function create()
    {
        return view('pegawai.periode');
    }
    public function store(Request $request)
    {
        $periode = new Periode;
        $periode->periode = $request->periode;

        $periode->save();
        return redirect('/pegawai');
        
    }

    public function show($id)
    {
        $data = Pengajuan::find($id);
        return view('pegawai.detailData',compact('data'));
    }

    public function edit($id)
    {
        $validasi = Pengajuan::find($id);
        return view('pegawai.validasi',compact('validasi'));
    }

    public function update(Request $request, $id)
    {
        $validasi = Pengajuan::find($id);
        $validasi->status = $request->status;
        $validasi->update();
        return redirect('/pegawai/data-masuk');

    }
}
