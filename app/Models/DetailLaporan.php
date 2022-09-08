<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailLaporan extends Model
{
    use HasFactory;

    public $table = 'detail_laporans';

    protected $guarded = ['id'];

    public function laporan()
    {
        return $this->belongsTo(Laporan::class);
    }
}
