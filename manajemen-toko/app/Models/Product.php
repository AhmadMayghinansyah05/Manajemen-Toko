<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi
    protected $fillable = ['name','category_id','price','stock','image'];

    // Relasi ke kategori (1 produk hanya milik 1 kategori)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi ke penjualan (1 produk bisa dijual berkali-kali)
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
