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
        return view('home.form-otomotif.index', compact('service'));
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
        $data = [
            'api_key' => 'mMqH4MwRHJpLS0H4LyekrebMYIjuqv',
            'sender' => '6287790002941',
            'number' => "$request->telepon",
            'message' => "Pesanan anda berhasil dibuat silahkan tunggu beberapa saat untuk di konfirmasi oleh teknisi!"
        ];
        // dd($data);/
        $urlendpoint = "https://wa.alwafisysdev.my.id/send-message";
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $urlendpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

        $telepon = $service->contributor->telepon;
        $data2 = [
            'api_key' => 'mMqH4MwRHJpLS0H4LyekrebMYIjuqv',
            'sender' => '6287790002941',
            'number' => "$telepon",
            'message' => "Ada pesanan baru ke tempat anda nih silahkan cek aplikasi!"
        ];

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => $urlendpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data2),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

        return redirect('/')->with('success', 'Data berhasil disimpan');
    }
}
