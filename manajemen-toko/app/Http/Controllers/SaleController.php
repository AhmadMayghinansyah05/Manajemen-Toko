<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    // ✅ Menampilkan semua transaksi
    public function index()
    {
        $sales = Sale::with('product')->latest()->get();
        return view('sales.index', compact('sales'));
    }

    // ✅ Form tambah transaksi
    public function create()
    {
        $products = Product::all();
        return view('sales.create', compact('products'));
    }

    // ✅ Simpan transaksi & kurangi stok produk
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'quantity' => 'required|integer|min:1'
        ]);

        $product = Product::findOrFail($request->product_id);

        // ✅ Cek stok cukup atau tidak
        if ($product->stock < $request->quantity) {
            return back()->withErrors(['quantity' => 'Stok produk tidak mencukupi!']);
        }

        // ✅ Hitung total harga
        $total_price = $product->price * $request->quantity;

        // ✅ Simpan transaksi
        Sale::create([
            'product_id' => $product->id,
            'quantity'   => $request->quantity,
            'total_price'=> $total_price
        ]);

        // ✅ Kurangi stok produk
        $product->decrement('stock', $request->quantity);

        return redirect()->route('sales.index')->with('success', 'Transaksi berhasil disimpan!');
    }

    // ✅ Hapus transaksi (opsional, tidak menambah stok lagi untuk menjaga data transaksi)
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect()->route('sales.index')->with('success', 'Transaksi dihapus!');
    }
}
