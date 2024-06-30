<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    public function showVerificationForm($hash)
    {
        // Ambil pengguna yang login saat ini
        $user = Auth::user();

        // Oper email dan hash ke tampilan
        return view('auth.verify', ['hash' => $hash]);
    }
    public function verify(Request $request, $hash)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|string',
        ]);

        // Logika verifikasi menggunakan hash
        $user = User::where('email', $request->email)->first();

        if ($this->checkOtp($request->otp, $user->email)) {
            // Verifikasi berhasil
            $user->status = 1;
            $user->otp = null;
            $user->save();
            Auth::login($user);

            return redirect()->route('dashboard')->with('status', 'Verifikasi berhasil. Anda telah masuk.');
        }
        // dd($this->checkOtp($request->otp, $user->email));

        return redirect()->back()->withErrors(['otp' => 'Verification failed.']);
    }

    private function checkOtp($otp, $email)
    {
        $user = User::where('otp', $otp)->where('email', $email)->first();
        // dd($user);
        if (!$user) {
            return false;
        }
        return true; // Contoh saja, sesuaikan dengan logika OTP Anda
    }
}
