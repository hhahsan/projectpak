<?php

namespace App\Http\Controllers;

use App\Pengajuan;
use App\Periode;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.dashboard',[
            'periode' => Periode::orderBy('id','desc')->limit('1')->get(),
            'count' => Pengajuan::all()->count(),
            'user' => User::all()->count(),
        ]);
    }

    public function dataMasuk()
    {
        $no =0;
        $datas = DB::table('pengajuan')
        ->join('users','pengajuan.user_id','=','users.id') 
        ->join('periode','pengajuan.periode_id','=','periode.id')
        ->join('profil','pengajuan.user_id','=','profil.user_id')
        ->get();
        return view('admin.dataMasuk',compact('no','datas'));
    }

    public function dataDestroy($id)
    {
        $data = Pengajuan::find($id);
        $data->delete();
        return redirect('/admin/data-masuk');
    }

    public function create()
    {
        return view('admin.periode');
    }

    public function store(Request $request)
    {
        $periode = new Periode;
        $periode->periode = $request->periode;

        $periode->save();
        return redirect('/admin');

    }

    public function show($id)
    {
        $data = Pengajuan::find($id);
        return view('admin.detailData',compact('data'));
    }

    public function edit($id)
    {
        $validasi = Pengajuan::find($id);
        return view('admin.validasi',compact('validasi'));
    }

    public function update(Request $request, $id)
    {
        $validasi = Pengajuan::find($id);
        $validasi->status = $request->status;
        $validasi->update();
        return redirect('/admin/data-masuk');
    }

    public function dataUser()
    {
        $no = 0;
        $users = User::all();

        return view('admin.dataPengguna', compact('no','users'));
    }

    public function createUser()
    {
        return view('admin.tambahPengguna');
    }
    public function storeUser(Request $request)
    {
        $user = new User();
        $user->gelar_depan = $request->gelar_depan;
        $user->nama = $request->nama;
        $user->gelar_belakang = $request->gelar_belakang;
        $user->nip = $request->nip;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level_id = $request->level_id;

        $user->save();
        return redirect('/admin');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/data-user');
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.editPengguna', compact('user'));
    }
    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->gelar_depan = $request->gelar_depan;
        $user->nama = $request->nama;
        $user->gelar_belakang = $request->gelar_belakang;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->update();
        return redirect('/admin');
    }
}
