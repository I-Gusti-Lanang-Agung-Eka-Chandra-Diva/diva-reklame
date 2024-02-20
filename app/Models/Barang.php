<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Kategori(){
        return $this->hasOne(KategoriBarang::class, 'id', 'kategori_barang_id');
    }
}
