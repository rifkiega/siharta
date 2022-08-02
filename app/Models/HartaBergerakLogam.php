<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HartaBergerakLogam extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['jenis_harta', 'atas_nama', 'hubungan_keluarga', 'jumlah_satuan', 'tahun_perolehan', 'harga_perolehan', 'nilai_jual_saat_pelaporan', ];
}
