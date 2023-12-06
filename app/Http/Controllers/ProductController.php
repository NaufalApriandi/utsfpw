<?php

// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $listBarang = Product::all();
        foreach ($listBarang as $key => $barang) {
            $listBarang[$key]->totalHargaBarang = $barang->Qty * $barang->HargaJual;

            $listBarang[$key]->diskon = $this->hitungDiskon($listBarang[$key]->totalHargaBarang);
            $potonganHarga = ($listBarang[$key]->diskon / 100) * $listBarang[$key]->totalHargaBarang;
            $listBarang[$key]->hargaSetelahDiskon = $listBarang[$key]->totalHargaBarang - $potonganHarga;

        }
        return view ('index',['listProduct'=>$listBarang]);
    }
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


        return redirect()->route('home');
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

    public function editForm($id)
    {
        $barang = Product::find($id);
        return view('edit', ['barang' => $barang]);
    }

    public function edit(Request $request, $id)
    {

        $barang = Product::find($id);

        if ($barang) {
            //'kodebarang', 'namabarang', 'jenisvarian', 'qty', 'hargajual'
            $barang->KodeBarang = $request->KodeBarang;
            $barang->NamaBarang = $request->NamaBarang;
            $barang->JenisVarian = $request->JenisVarian;
            $barang->Qty = $request->Qty;
            $barang->HargaJual = $request->HargaJual;
            $barang->save();
            return redirect()->route('home');


        }
    }

    public function delete($id) {

    $barang = Product::find($id);
    if ($barang) {
        $barang->delete();
        return redirect()->route('home')->with('success', 'Product deleted successfully');
    } else {
        return redirect()->route('home')->with('error', 'Product not found');
    }
}


    private function hitungDiskon($totalHarga)
    {
        if ($totalHarga >= 500000) {
            return 50;
        } elseif ($totalHarga >= 200000) {
            return 20;
        } elseif ($totalHarga >= 100000) {
            return 10;
        }

        return 0;
    }
    
    public function utama()
    {
        return view('product-form');
    }
}
