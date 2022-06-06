<?php

namespace App\Http\Controllers;

use App\Models\Ustad;
use Illuminate\Http\Request;




class RegisterUstadController extends Controller
{
    public function index()
    {
        return view('registerUstad.index', [
            'title' => '|| Register Ustad'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'kitab' => 'required|max:255',
            'username' => 'required|min:6|max:20',
            'password' => 'required|min:6|max:12'
        ]);

        Ustad::create($validatedData);

        dd('registrasi berhasil');
    }
}