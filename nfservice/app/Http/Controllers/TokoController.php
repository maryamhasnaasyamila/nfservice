<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index()
    {
        return view('home.profil-toko.index');
    }
}
