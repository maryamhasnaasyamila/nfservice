<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $totalorders = Order::all()->count();
        if (Auth::user()->role == 'user') {
            $id = Contributor::where('user_id', Auth::user()->id)->first()->id;
            $totalorders = Order::whereHas('service', function($query) use ($id) {
                $query->where('contributor_id', $id);
            })->count() ?? 0;
        }
        $bulan = [];
        for ($i=1; $i <= 12 ; $i++) { 
            $bulan[$i] = Order::whereMonth('created_at', $i)->count();

            if (Auth::user()->role == 'user') {
                $bulan[$i] = Order::whereHas('service', function($query) use ($id) {
                    $query->where('contributor_id', $id);
                })->whereMonth('created_at', $i)->count() ?? 0;
            }
        }
        $neworders = Order::orderBy('created_at', 'desc')->take(10)->get();
        if (Auth::user()->role == 'user') {
            $neworders = Order::whereHas('service', function($query) use ($id) {
                $query->where('contributor_id', $id);
            })->orderBy('created_at', 'desc')->take(10)->get();
        }
        return view('dashboard.index', compact('totalorders', 'bulan', 'neworders'));
    }

}
