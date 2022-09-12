<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\User;
use App\Models\Laporan;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pdf = PDF::loadView('rekap.pdf');

        return $pdf->download('LHKASN.pdf');
    }

    public function rekapData()
    {
        $user = User::whereHas(
            'roles', function($q){
                $q->where('name', 'pelapor');
            }
        )->get();
        return view ('rekap.index', compact('user'));
    }

    public function detail(Request $request)
    {
        $id = [
            'id' => $request->user_id,
        ];
        
        $pdf = PDF::loadView('rekap.detail', $id);

        return $pdf->download('LHKASN.pdf');
    }
}
