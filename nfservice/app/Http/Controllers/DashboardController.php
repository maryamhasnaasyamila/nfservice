<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        $totalorders = Order::all()->count();
        $bulan = [];
        for ($i=1; $i <= 12 ; $i++) { 
            $bulan[$i] = Order::whereMonth('created_at', $i)->count();
        }
        $neworders = Order::orderBy('created_at', 'desc')->take(10)->get();
        return view('dashboard.index', compact('totalorders', 'bulan', 'neworders'));
    }

}
