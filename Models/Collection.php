<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    // Reza M. Akbar 6706223125 4604
    use HasFactory;
    protected $fillable = [
        'namaKoleksi',
        'jenisKoleksi',
        'jumlahKoleksi'
    ];
    const CREATED_AT = 'createdAt'; //untuk menunjuk column created_at yang dibuat otomatis ke column createdAt
}
