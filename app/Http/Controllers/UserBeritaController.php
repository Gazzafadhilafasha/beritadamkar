<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class UserBeritaController extends Controller
{
    // Fungsi untuk menampilkan halaman detail berita di user/berita.blade.php
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('user.berita', compact('berita')); // Tampilkan user/berita.blade.php
    }
}
