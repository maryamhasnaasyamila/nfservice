<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AllRekapController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('dashboard.recaps.index', compact('orders'));
    }

    public function destroy(string $id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('orders.index');
    }
}
