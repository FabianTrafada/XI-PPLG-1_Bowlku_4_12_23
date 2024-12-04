<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Menyaring produk berdasarkan kategori jika ada
        $query = Product::with('category'); // Mengambil produk beserta kategori

        if ($request->has('category') && $request->category != '') {
            $query->where('category_id', $request->category); // Filter produk berdasarkan category_id
        }

        // Mengambil produk setelah difilter
        $products = $query->get();

        // Mengambil semua kategori untuk dropdown filter
        $categories = Category::all();

        // Mengirim produk dan kategori ke view
        return view('products.index', compact('products', 'categories'));
    }
}
