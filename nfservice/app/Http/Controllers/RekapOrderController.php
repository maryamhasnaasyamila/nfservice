<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekapOrderController extends Controller
{
    public function index()
    {
        return view('dashboard.recap.index');
    }
}
