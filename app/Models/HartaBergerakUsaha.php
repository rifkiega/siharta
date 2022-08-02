<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HartaBergerakUsaha extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['jenis_usaha', 'atas_nama', 'hubungan_keluarga', 'jumlah_satuan', 'tahun_perolehan', 'omzet_pertahun', 'penghasilan_bersih_pertahun', 'nilai_saat_pelaporan', ];
}
