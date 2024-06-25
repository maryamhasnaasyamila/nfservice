<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllRekapController extends Controller
{
    public function index()
    {
        return view('dashboard.recaps.index');
    }
}
