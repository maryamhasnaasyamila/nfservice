<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::all();
        $categories = Category::all();
        // dd($request->all());
        if (isset($_GET['type'])) {
            return $this->harga($request);
        }
        return view('home.service.index', compact('services', 'categories'));
    }
    public function harga(Request $request)
    {
        $services = Service::whereBetween('harga', [$request->min_price, $request->max_price])
            ->orWhere('title', 'like', '%' . $request->keyword . '%')
            ->orWhereHas('contributor', function ($query) use ($request) {
                $query->where('nama', 'like', '%' . $request->keyword . '%')
                    ->orWhere('alamat', 'like', '%' . $request->keyword . '%');
            })
            ->get();

        $categories = Category::all();
        return view('home.service.index', compact('services', 'categories'));
    }

    public function detail(string $slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('home.service.detail', compact('service'));
    }
}
