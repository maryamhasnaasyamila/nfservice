<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailServiceController extends Controller
{
    public function index()
    {
        return view('home.detail-service.index');
    }
}
