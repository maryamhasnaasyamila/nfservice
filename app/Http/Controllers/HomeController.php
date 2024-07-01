<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $services = Service::limit(6)->get();
        return view('home.index', compact('categories', 'services'));
    }
}
