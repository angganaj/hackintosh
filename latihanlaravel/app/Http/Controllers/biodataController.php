<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class biodataController extends Controller
{
    public function daftar()
    {
        return view('halaman.daftar');
    }
}
