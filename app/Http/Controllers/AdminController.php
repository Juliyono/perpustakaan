<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Member;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Menghitung jumlah buku dan anggota
        $bukus = Buku::count(); 
        $members = Member::count(); 

        // Mengirimkan data ke tampilan dashboard
        return view('pages.admin.dashboard', compact('bukus', 'members')); 
    }
}
