<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratBerharga extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['jenis_surat', 'atas_nama', 'hubungan_keluarga', 'jumlah_kepemilikan', 'nama_perusahaan', 'nilai_jual_saat_pelaporan', ];
}
