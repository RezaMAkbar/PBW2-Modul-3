<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    //Reza M. Akbar 6706223125
    use HasFactory;
    protected $fillable = [
        'useridPetugas',
        'useridPeminjam',
        'tanggalPinjam',
        'tanggalSelesai'
    ];

}
