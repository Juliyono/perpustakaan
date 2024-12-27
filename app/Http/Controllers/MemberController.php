<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        $query = Member::query();
        $members = Member::count(); 

        // Pencarian Member
        if ($request->has('cari')) {
            $query->where('nama', 'like', '%' . $request->cari . '%');
        }

        // Mendapatkan semua data member
        $members = $query->get(); // Mengambil semua data member

        confirmDelete('Hapus Data!', 'Apakah anda yakin ingin menghapus data ini?');

        return view('pages.admin.members.index', compact('members'));
    }

    public function create()
    {
        return view('pages.admin.members.create');  // Path diubah sesuai lokasi folder view
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email|unique:members,email',
        ]);

        Member::create($request->all());

        Alert::success('Berhasil', 'Member berhasil ditambahkan!');  // Menampilkan SweetAlert setelah berhasil menambah data

        return redirect()->route('members.index');
    }

    public function detail($id)
    {
        $member = Member::findOrFail($id); // Mencari member berdasarkan id
        return view('pages.admin.members.detail', compact('member')); // Mengembalikan tampilan detail member
    }

    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('pages.admin.members.edit', compact('member'));  // Path diubah sesuai lokasi folder view
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email|unique:members,email,' . $id,
        ]);

        $member = Member::findOrFail($id);
        $member->update($request->all());

        Alert::success('Berhasil', 'Member berhasil diperbarui!');  // Menampilkan SweetAlert setelah berhasil update

        return redirect()->route('members.index');
    }

   public function delete($id)
    {
        $member = Member::findOrFail($id); // Ambil data member berdasarkan ID
        $member->delete(); // Hapus data tersebut

        Alert::success('Berhasil', 'Member berhasil dihapus!'); // Tampilkan notifikasi sukses

        return redirect()->route('members.index'); // Redirect ke halaman index
    }

}
