<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;

class profilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    
        $profil = Profil::all();

        return view('user.profil',compact('profil'));
    }

    public function create()
    {
        return view('user.isiProfil');
    }
    public function store(Request $request)
    {
        $profil = new Profil;
        $profil->user_id = auth()->id();
        $profil->no_telephone = $request->no_telephone;
        $profil->alamat = $request->alamat;
        $profil->tempat_lahir = $request->tempat_lahir;
        $profil->tanggal_lahir = $request->tanggal_lahir;
        $profil->jenis_kelamin = $request->jenis_kelamin;

        $profil->save();
        return redirect('/profil');
    }

    public function edit($id)
    {
        $profil = Profil::find($id);
        return view('user.editProfil',compact('profil'));
    }

    public function update(Request $request, $id)
    {
        $profil = Profil::find($id);
        $profil->user_id = auth()->id();
        $profil->no_telephone = $request->no_telephone;
        $profil->alamat = $request->alamat;
        $profil->tempat_lahir = $request->tempat_lahir;
        $profil->tanggal_lahir = $request->tanggal_lahir;
        $profil->jenis_kelamin = $request->jenis_kelamin;

        $profil->update();
        return redirect('/profil');
    }
}
