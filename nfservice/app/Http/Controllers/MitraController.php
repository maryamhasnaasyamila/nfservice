<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use App\Models\Service;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index()
    {
        $contributors = Contributor::all();
        return view('dashboard.mitra.index', compact('contributors'));
    }

    public function create()
    {
        return redirect()->route('mitra.index');
    }

    public function store(Request $request)
    {
        return redirect()->route('mitra.index');
    }

    public function show(string $id)
    {
        $contributor = Contributor::findOrFail($id);
        $services = Service::where('contributor_id', $id)->get();
        return view('dashboard.mitra.show', compact('services', 'contributor'));
    }
    
    public function edit(string $id)
    {
        return redirect()->route('mitra.index');
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('mitra.index');
    }

    public function destroy(string $id)
    {
        $contributor = Contributor::findOrFail($id);
        $contributor->delete();
        return redirect()->route('mitra.index');
    }
}
