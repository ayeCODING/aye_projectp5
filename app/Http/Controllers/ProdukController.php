<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Storage;

class ProdukController extends Controller
{

    public function index()
    {
        $produk = Produk::latest()->get();
        return view('produk.index', compact('produk'));
    }

    public function create()
    {
        $merk = Merk::all();
        $kategori = Kategori::all();
        return view('produk.create', compact('merk', 'kategori'));
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama_produk' => 'required',
            'id_merk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'id_kategori' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:10048',
        ]);

        $produk = new Produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->id_merk = $request->id_merk;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->id_kategori = $request->id_kategori;

        // upload image
        $image = $request->file('image');
        $image->storeAs('public/produks', $image->hashName());
        $produk->image = $image->hashName();
        $produk->save();
        return redirect()->route('produk.index');
    }

    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.show', compact('produk'));
    }

    public function edit($id)
    {
        $merk = Merk::all();
        $kategori = Kategori::all();
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk', 'merk', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'id_merk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'id_kategori' => 'required',

        ]);

        $produk = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->id_merk = $request->id_merk;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->id_kategori = $request->id_kategori;

        // upload image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/produks', $image->hashName());
            Storage::delete('public/produks/' . $produk->image);
            $produk->image = $image->hashName();
        }

        $produk->save();
        return redirect()->route('produk.index');

    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        Storage::delete('public/produks/' . $produk->image);
        $produk->delete();
        return redirect()->route('produk.index');

    }
}
