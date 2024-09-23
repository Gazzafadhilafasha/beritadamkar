<?php
namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('berita.index', compact('beritas'));
    }
    public function dashboard()
    {
        $beritas = Berita::all();
        return view('user.dashboard', compact('beritas'));
    }


    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'penulis' => 'required',
        ]);

        Berita::create($request->all());
        return redirect()->route('berita.index')
                        ->with('success', 'Berita berhasil ditambahkan');
    }

    public function show(Berita $berita)
    {
        return view('berita.show', compact('berita'));
    }

    public function edit(Berita $berita)
    {
        return view('berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'penulis' => 'required',
        ]);

        $berita->update($request->all());
        return redirect()->route('berita.index')
                        ->with('success', 'Berita berhasil diupdate');
    }

    public function destroy(Berita $berita)
    {
        $berita->delete();
        return redirect()->route('berita.index')
                        ->with('success', 'Berita berhasil dihapus');
    }
}
