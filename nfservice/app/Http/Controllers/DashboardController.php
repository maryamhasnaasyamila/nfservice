<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\Layanan;
use App\Models\Mitra;
use App\Models\AllRekap;
use App\Models\AllLayanan;
use App\Models\RekapOrder;
use App\Models\Profil;



class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

}
