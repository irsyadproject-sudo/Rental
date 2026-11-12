<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    protected $table = 'laporans';
    protected $primaryKey = 'id_laporan';
    protected $fillable = ['id_transaksi', 'tanggal', 'total_bayar'];
}
