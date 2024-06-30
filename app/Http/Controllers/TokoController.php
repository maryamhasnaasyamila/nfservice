<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index(string $id)
    {
        $contributor = Contributor::find($id);
        return view('home.profil-toko.index', compact('contributor'));
    }
}
