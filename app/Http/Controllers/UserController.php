<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return redirect('login');
    }

        public function authentication(Request $request)
        {
            $validatedata = $request->validate([
                'email' => ['required', 'email'],
                'password' => 'required'
            ]);
            if (Auth::attempt($validatedata)) {
                return redirect('admin/dashboard')->with('pesan', 'Maaf login Anda gagal');
            }else
            {
                return redirect()->back()->with('pesan', 'Maaf login Anda gagal');
            }
        }
        function logout()
        {
            Auth::logout();
            return redirect('/');
        }
}
