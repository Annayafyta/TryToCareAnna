<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'penulis' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')->with('success', 'Artikel berhasil dibuat.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // public function update(Request $request, Post $post)
    // {
    //     $request->validate([
    //         'judul' => 'required',
    //         'konten' => 'required',
    //         'penulis' => 'required',
    //     ]);

    //     $post->update($request->all());

    //     return redirect()->route('posts.index')->with('success', 'Artikel berhasil diupdate.');
    // }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Artikel berhasil dihapus.');
    }

    public function parenting(Post $post)
    {
        return view('posts.parenting');
    }

    public function mon(Post $post)
    {
        return view('posts.46mon');
    }

    public function biaya(Post $post)
    {
        return view('posts.biaya');
    }

    public function dady(Post $post){
        return view('posts.dady');
    }
    public function about(Post $post){
        return view('posts.about');
    }

    public function mom(Post $post){
        return view('posts.mom');
    }

    public function events(Post $post){
        return view('posts.events');
    }
    public function contact(Post $post){
        return view('posts.contact');
    }
}
