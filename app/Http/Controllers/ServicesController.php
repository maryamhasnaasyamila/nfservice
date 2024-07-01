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
        if ($request->min_price == NULL) {
            $services = Service::where('title', 'like', '%' . $request->keyword . '%')
                ->orWhereHas('contributor', function ($query) use ($request) {
                    $query->where('nama', 'like', '%' . $request->keyword . '%')
                        ->orWhere('alamat', 'like', '%' . $request->keyword . '%');
                })
                ->get();
        } else {

            $services = Service::where('harga', '>=', $request->min_price)->where('harga', '<=', $request->max_price)
                ->where('title', 'like', '%' . $request->keyword . '%')
                ->orWhereHas('contributor', function ($query) use ($request) {
                    $query->where('nama', 'like', '%' . $request->keyword . '%')
                        ->orWhere('alamat', 'like', '%' . $request->keyword . '%');
                })
                ->get();
        }

        $categories = Category::all();
        return view('home.service.index', compact('services', 'categories'));
    }

    public function detail(string $slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('home.service.detail', compact('service'));
    }

    public function show(Request $request, $slug)
    {
        $services = Service::whereHas('category', function ($query) use ($slug) {
            $query->whereHas('category', function ($query) use ($slug) {
                $query->where('slug', $slug);
            });
        })->get();
        $category = Category::where('slug', $slug)->first();

        if (isset($_GET['type'])) {
            return $this->filter($request, $slug);
        }
        return view('home.service.show', compact('services', 'category'));
    }

    public function filter(Request $request, $slug)
    {
        if ($request->min_price != null && $request->max_price != null && $request->keyword != null) {

            $services = Service::where('harga', '>=', $request->min_price)->where('harga', '<=', $request->max_price)
                ->where('title', 'like', '%' . $request->keyword . '%')
                ->orWhereHas('contributor', function ($query) use ($request) {
                    $query->where('nama', 'like', '%' . $request->keyword . '%')
                        ->orWhere('alamat', 'like', '%' . $request->keyword . '%');
                })->whereHas('category', function ($query) use ($slug) {
                    $query->where('slug', $slug);
                })
                ->get();
        }
        // dd($services);
        $category = Category::where('slug', $slug)->first();

        return view('home.service.show', compact('services', 'category'));
    }
}
