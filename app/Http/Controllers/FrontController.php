<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use App\Models\Produk;
use App\Models\Kategori;

class FrontController extends Controller
{
    public function index()
    {
        $merk = Merk::all();
        $produk = Produk::latest()->get();
        $kategori = Kategori::all();
        return view('welcome', compact('produk', 'merk', 'kategori'));
    }

    public function produk()
    {
        $merk = Merk::all();
        $produk = Produk::latest()->get();
        $kategori = Kategori::all();
        return view('produk', compact('produk', 'merk', 'kategori'));
    }

    public function about()
    {
        return view('about');
    }

    public function detailProduk($id)
    {
        $produk = Produk::findOrFail($id);
        return view('detail_produk', compact('produk'));
    }

    public function filterByMerk($id)
    {
        $kategori = Kategori::all();
        $merk = Merk::all();
        $produk = Produk::where('id_merk', $id)->latest()->get();
        return view('produk', compact('produk', 'merk', 'kategori'));
    }

    public function filterByKategori($id)
    {
        $kategori = Kategori::all();
        $merk = Merk::all();
        $produk = Produk::where('id_kategori', $id)->latest()->get();
        return view('kategori', compact('produk', 'merk', 'kategori'));
    }
}
