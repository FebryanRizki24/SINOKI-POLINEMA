<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanProkerController extends Controller
{
    public function index()
    {
        return view('halamanProker');
    }
}