<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi
    protected $fillable = ['product_id','quantity','total_price'];

    // Relasi ke produk (1 penjualan hanya untuk 1 produk)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
