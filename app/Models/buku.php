<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_buku', 'genre', 'harga', 'stok', 'penerbit', 'tanggal_terbit','photo'];
    public $timestamp   = true;

    public function deleteImage(){
        if ($this->photo && file_exists(public_path('storage/buku'. $this->photo))) {
            return unlink(public_path('storage/buku' . $this->photo));
        }
    }
}
