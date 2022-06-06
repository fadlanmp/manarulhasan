<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterSantriController extends Controller
{
    public function index()
    {
        return view('registerSantri.index', [
            'title' => '|| Register Santri'
        ]);
    }
}
