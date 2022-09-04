<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HartaTidakBergerak extends Model
{
    use HasFactory;

    public $table = 'harta_tidak_bergeraks';

    protected $guarded = ['id'];

}
