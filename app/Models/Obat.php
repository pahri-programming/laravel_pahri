<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_obat','jenis_obat','tgl_kadaluarsa','harga'];
    public $timestamp   = true;

    
    //relasi ke tabel transaksi
    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }
}
