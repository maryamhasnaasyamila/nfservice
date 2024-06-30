<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormOtomotifController extends Controller
{
    public function index()
    {
        return view('home.form-otomotif.index');
    }
}
