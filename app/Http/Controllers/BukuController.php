<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BukuController extends Controller
{
    public function index(Request $request)
    {
        $query = Buku::query();
        $bukus = Buku::count(); 
    
        // Pencarian Buku
        if ($request->has('cari')) {
            $query->where('judul', 'like', '%' . $request->cari . '%');
        }
    
        // Filter berdasarkan kategori
        if ($request->has('kategori') && $request->kategori != '') {
            $query->where('kategori', $request->kategori);
        }
    
        // Mengambil semua data buku tanpa paginasi
        $bukus = $query->get();
    
        // Mengambil daftar kategori unik dari tabel buku
        $kategoris = Buku::select('kategori')->distinct()->pluck('kategori');
    
        confirmDelete('Hapus Data!', 'Apakah anda yakin ingin menghapus data ini?');
    
        return view('pages.admin.bukus.index', compact('bukus', 'kategoris'));
    }
    
    public function create()
    {
        return view('pages.admin.bukus.create');  // Path diubah sesuai lokasi folder view
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'penulis' => 'required|max:255',
            'kategori' => 'required',
            'tahun_terbit' => 'required|integer',
        ]);

        Buku::create($request->all());

        Alert::success('Berhasil', 'Buku berhasil ditambahkan!');  // Menampilkan SweetAlert setelah berhasil menambah data

        return redirect()->route('bukus.index');
    }

    public function detail($id)
    {
        $buku = Buku::findOrFail($id); // Mencari buku berdasarkan id
        return view('pages.admin.bukus.detail', compact('buku')); // Mengembalikan tampilan detail buku
    }


    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('pages.admin.bukus.edit', compact('buku'));  // Path diubah sesuai lokasi folder view
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'penulis' => 'required|max:255',
            'kategori' => 'required',
            'tahun_terbit' => 'required|integer',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        Alert::success('Berhasil', 'Buku berhasil diperbarui!');  // Menampilkan SweetAlert setelah berhasil update

        return redirect()->route('bukus.index');
    }

    public function delete($id)
    {
        $buku = Buku::findOrFail($id); // Ambil instansi model berdasarkan ID
        $buku->delete(); // Hapus data dari database

        Alert::success('Berhasil', 'Buku berhasil dihapus!'); // Tampilkan notifikasi sukses
        return redirect()->route('bukus.index'); // Redirect ke halaman index
    }

}
