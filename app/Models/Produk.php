<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['nama_produk', 'id_merk', 'harga', 'stok', 'deskripsi', 'id_kategori', 'image'];
    protected $visible = ['nama_produk', 'id_merk', 'harga', 'stok', 'deskripsi', 'id_kategori', 'image'];

    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function merk()
    {
        return $this->belongsTo(Merk::class, 'id_merk');
    }

}
