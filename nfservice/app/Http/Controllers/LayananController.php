<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('dashboard.services.index', compact('services'));
    }

    public function destroy(string $id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('services.index');
    }

    public function show(String $id)
    {
        $service = Service::find($id);
        return view('dashboard.services.show', compact('service'));
    }
}
