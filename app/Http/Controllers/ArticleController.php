<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.dashboard', compact('articles'));
    }

    public function create()
    {
        return view('admin.create_article');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        $file_name = $request->title.'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('images', $file_name);

        // Article::create($request->only('title', 'content'));
        Article::create([
            'image' => $file_name, // Simpan path gambar
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Artikel berhasil dibuat!');
    }
    public function edit($id)
{
    $article = Article::findOrFail($id);
    return view('admin.edit', compact('article'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
    ]);

    // $article = Article::findOrFail($id);
    // $article->update($request->only('title', 'content'));

    $article = Article::findOrFail($id);
    $data = $request->only('title', 'content');


    if ($request->hasFile('image')) {

        $imagePath = $request->file('image')->store('images', 'public');
        $data['image'] = $imagePath;
    }

    $article->update($data);
    return redirect()->route('admin.dashboard')->with('success', 'Artikel berhasil diperbarui!');
}

public function setting(){
    return view('admin.setting');
}


public function destroy($id)
{
    $article = Article::findOrFail($id);
    $article->delete();

    return redirect()->route('admin.dashboard')->with('success', 'Artikel berhasil dihapus!'); // Mengarahkan kembali dengan pesan sukses
}


}
