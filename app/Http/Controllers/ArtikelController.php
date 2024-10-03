<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function search(Request $request){
        $data['judul'] = Artikel::where('artikel', $request->cari)->orWhere('konten', $request->cari)->get();
        $data['total'] = $data['judul']->count();

        return view('posts.index', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul' => 'required|string|max:255',
            'konten' => 'required',
        ]);

        $imagePath = $request->file('storage')->store('artikel_images', 'public');
        $file = $request->file('image');
            if ($file) {
        $file->store('path/to/store');
        } else {
            return back()->with('error', 'File belum dipilih. Silakan pilih file untuk diunggah.');
        }
        Artikel::create([
            'image' => $imagePath,
            'judul' => $request->judul,
            'konten' => $request->konten,
        ]);

        return redirect()->back()->with('success', 'Artikel berhasil disimpan.');
    }
    public function index()
{
    $artikels = Artikel::all();
    return view('posts.index', compact('artikels'));
}
public function create()
{
    return view('posts.create'); // Ganti dengan nama file Blade yang sesuai
}

}

