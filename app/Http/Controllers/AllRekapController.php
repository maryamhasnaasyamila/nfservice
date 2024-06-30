<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use App\Models\Order;
use Illuminate\Http\Request;

class AllRekapController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        if (auth()->user()->role == 'user'){
            $id = Contributor::where('user_id', auth()->id())->first()->id;
            $orders = Order::whereHas('service', function($query) use ($id) {
                $query->where('contributor_id', $id);
            })->get();
        }
        return view('dashboard.recaps.index', compact('orders'));
    }

    public function destroy(string $id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('orders.index');
    }
}
