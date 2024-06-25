<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormElektronikController extends Controller
{
    public function index()
    {
        return view('home.form-elektronik.index');
    }
}
