<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use App\Models\Service;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $services = Service::all();
        if (auth()->user()->role == 'user'){
            $id = Contributor::where('user_id', auth()->id())->first()->id;
            $services = Service::where('contributor_id', $id)->get();
        }
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
