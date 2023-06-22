<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = "siswas";
    protected $fillable = ['nama', 'nis', 'alamat'];
    protected $dates = ['created_at'];
}
