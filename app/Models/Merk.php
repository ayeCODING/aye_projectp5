<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;

    protected $fillable = ['nama_merk'];
    protected $visible = ['nama_merk'];

    public $timestamps = true;

    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_merk' );
    }
}
