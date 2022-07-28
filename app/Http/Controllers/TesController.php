<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    public function index()
    {
        // return view('home');
        $user = auth()->user();
        return view('tes', compact('user'));
    }
}
