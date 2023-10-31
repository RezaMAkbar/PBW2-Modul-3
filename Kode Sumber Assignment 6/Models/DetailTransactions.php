<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransactions extends Model
{
    //Reza M. Akbar 6706223125
    use HasFactory;
    protected $fillable = [
        'transaction_id',
        'collection_id',
        'tanggalKembali',
        'status',
        'keterangan'
    ];
}
