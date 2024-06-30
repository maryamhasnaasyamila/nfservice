<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceElektronikController extends Controller
{
    public function index()
    {
        return view('home.service-elektronik.index');
    }
}
