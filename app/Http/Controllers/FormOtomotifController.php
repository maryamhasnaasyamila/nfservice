<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class FormOtomotifController extends Controller
{
    public function index(string $slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('home.form-otomotif.index', compact('service')) ;
    }

    public function store(Request $request, string $slug)
    {
        $service = Service::where('slug', $slug)->first();
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'jenis' => 'required',
            'merk' => 'required',
            'tanggal' => 'required',
            'service_id' => 'required',
            'jam' => 'required',
        ]);

        Order::create($request->all());
        FacadesAlert::success('Success', 'Data berhasil disimpan');
        return redirect('/')->with('success', 'Data berhasil disimpan');
    }
}
