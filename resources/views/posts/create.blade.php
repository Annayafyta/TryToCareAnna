@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Buat Artikel Baru</h2>

    <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="from-group">
            <label for="image">Foto artikel</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>

        <div class="form-group">
            <label>Judul Artikel</label>
            <input type="text" name="judul" class="form-control" required value="">
        </div>

        <div class="form-group">
            <label>Konten</label>
            <textarea name="konten" class="form-control" rows="5" required ></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
