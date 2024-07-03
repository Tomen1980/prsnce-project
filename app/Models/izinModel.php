<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class izinModel extends Model
{
    protected $table = 'izin';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;

}
