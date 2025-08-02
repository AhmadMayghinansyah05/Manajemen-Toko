<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // ✅ Menampilkan semua produk
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    // ✅ Form tambah produk
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    // ✅ Simpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $data = $request->only(['name','category_id','price','stock']);

        // ✅ Upload gambar jika ada
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        Product::create($data);

        return redirect()->route('products.index')->with('success','Produk berhasil ditambahkan');
    }

    // ✅ Form edit produk
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product','categories'));
    }

    // ✅ Update produk
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $data = $request->only(['name','category_id','price','stock']);

        // ✅ Jika ada gambar baru, hapus gambar lama & upload baru
        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success','Produk berhasil diupdate');
    }

    // ✅ Hapus produk
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();

        return redirect()->route('products.index')->with('success','Produk berhasil dihapus');
    }
}
