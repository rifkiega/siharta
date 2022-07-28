<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        // return view('home');
        $user = auth()->user();
        return view('profil.index_profil', compact('user'));
    }
}
