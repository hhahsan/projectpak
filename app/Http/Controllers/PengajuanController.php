<?php
namespace App\Http\Controllers;

use App\Pengajuan;
use App\Periode;
use App\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class PengajuanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $periode = Periode::orderBy('id','desc')->limit('1')->get();
        return view('user.dashboard',compact('periode'));
    }

    public function show($id)
    {
        $detail = Pengajuan::find($id);
        return view('user.detail',compact('detail'));
    }

    public function dataPengajuan()
    {

        $no = 0;                                                            
        $datas = Pengajuan::with(['user.profil','periode.pengajuan'])->get();
        

        return view('user.dataPengajuan',compact('no','datas'));
    }

    public function create()
    {  
        
        return view('user.tambahPengajuan', [
            'periode' => Periode::orderBy('id','desc')->limit('1')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'pendidikan_terakhir'   => 'required',
            'jurusan'               => 'required',
            'tahun_lulus'           => 'required',
            'pangkat_golongan'      => 'required',
            'tmt'                   => 'required|date',
            'gol_tahun'             => 'required|max:2',
            'gol_bulan'             => 'required|max:2',
            'awal_penilaian'        => 'required|date',
            'jenis_guru'            => 'required',
            'tugas'                 => 'required',
            'alamat_sekolah'        => 'required',
            'kec_sekolah'           => 'required',
            'kab_sekolah'           => 'required',
        ]);
        
        $pengajuan = new Pengajuan;
        $pengajuan->user_id = auth()->id();
        $pengajuan->periode_id = $request->periode_id;
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
        
        $file = $request->file;
        $filename = time(). '.' .$file->getClientOriginalExtension();
        $file->move('pengantar/', $filename);
        $pengajuan->file = $filename;
        
        $pengajuan->save();

        Alert::success('Berhasil', 'Data berhasil disimpan');
        return redirect('/data-pengajuan');
    }
}
