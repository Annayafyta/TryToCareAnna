@extends('layout')

@section('content')
<div class="container mt-4">
    <h1>{{ $post->judul }}</h1>
    <p><small>Ditulis oleh: {{ $post->penulis }}</small></p>
    <p>{{ $post->konten }}</p>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
