<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
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
}
