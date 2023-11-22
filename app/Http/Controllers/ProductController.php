<?php

// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showForm()
    {
        return view('product-form');
    }

    public function processProduct(Request $request)
    {
        $request->validate([
            'KodeBarang' => 'required',
            'NamaBarang' => 'required',
            'JenisVarian' => 'required',
            'Qty' => 'required|numeric|min:1',
            'HargaJual' => 'required|numeric|min:1',
        ]);

        $product = Product::create($request->except('_token'));


        return redirect()->route('product-result', ['id' => $product->id]);
    }

    public function showResult($id)
    {
        $product = Product::findOrFail($id);

        $totalHargaJual = $product->Qty * $product->HargaJual;
        $diskon = 0;

        if ($totalHargaJual >= 500000) {
            $diskon = 0.5;
        } elseif ($totalHargaJual >= 200000) {
            $diskon = 0.2;
        } elseif ($totalHargaJual >= 100000) {
            $diskon = 0.1;
        }

        $potonganHarga = $totalHargaJual * $diskon;
        $hargaSetelahDiskon = $totalHargaJual - $potonganHarga;

        return view('product-result', [
            'product' => $product,
            'totalHargaJual' => $totalHargaJual,
            'diskon' => $diskon,
            'hargaSetelahDiskon' => $hargaSetelahDiskon,
        ]);
    }
    public function utama()
    {
        return view('product-form');
    }
}
