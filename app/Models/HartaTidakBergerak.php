<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HartaTidakBergerak extends Model
{
    use HasFactory;
    
    protected $guard = ['id'];

    protected $fillable = ['jenis_harta', 'luas_tanah', 'atas_nama', 'alamat', 'tahun_perolehan', 'harga_peroleh', 'total_njop_saat_pelaporan',  ];
}
