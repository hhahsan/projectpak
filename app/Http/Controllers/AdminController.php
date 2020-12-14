<?php

namespace App\Http\Controllers;

use App\Pengajuan;
use App\Periode;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
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
        $datas = Pengajuan::with(['user','periode.pengajuan'])->get();
        return view('admin.dataMasuk',compact('datas'));
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
        $users = User::all();

        return view('admin.dataPengguna', compact('users'));
    }

    public function createUser()
    {
        return view('admin.tambahPengguna');
    }
    public function storeUser(Request $request)
    {
        $user = new User();
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
        $user->nip = $request->nip;
        $user->password = Hash::make($request->password);

        $user->update();
        return redirect('/admin');
    }
}
