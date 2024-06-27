<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan';

    protected $fillable = ['deskripsi', 'id_absen'];
    protected $timestamps = false;
}
