<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensiModel extends Model
{
    protected $table = 'absensi';
    protected $fillable=["tanggal","absenMasuk","absenPulang","id_user"];
    public $timestamps = false;
}
