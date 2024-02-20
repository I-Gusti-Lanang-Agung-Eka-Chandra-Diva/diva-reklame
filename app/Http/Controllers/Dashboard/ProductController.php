<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\KategoriBarang;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.product.index', [
            'produk' => Barang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.product.create', [
            'kategori' => KategoriBarang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_produk' => 'required',
            'deskripsi_produk' => 'required',
            'kategori_produk' => 'required',
            'status_produk' => 'required',
            'harga_produk' => 'required|numeric',
            'foto_produk' => 'required|mimes:png,jpg,jpeg'
        ]);

        $kategori = KategoriBarang::where('kategori', $request->kategori_produk)->first();

        try {
            $foto = $request->file('foto_produk');
            $foto_produk = Str::random(10).'.'.$foto->extension();
            Barang::create([
                'nama' => $request->judul_produk,
                'harga' => $request->harga_produk,
                'deskripsi' => $request->deskripsi_produk,
                'foto' => 'storage/upload_files/foto_produk/'.$foto_produk,
                'bahan_id' > '2',
                'kategori_barang_id' => $kategori->id,
                'status' => $request->status_produk
            ]);
            $foto->move('storage/upload_files/foto_produk/', $foto_produk);
            return back()->with('success', 'Produk berhasil ditambahkan');
        } catch (QueryException $err) {
            return back()->with('error', 'Produk gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
