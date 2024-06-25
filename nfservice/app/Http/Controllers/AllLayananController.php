<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllLayananController extends Controller
{
    public function index()
    {
        return view('dashboard.services.index');
    }
}
