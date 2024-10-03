<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artikel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .card {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="#">ADMIN TRY TO CARE</a>
</nav>

<div class="container">
    <h2 class="text-center">Edit Artikel</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.update', $article->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="image">Foto (Terserah)</label>
                    <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                    @if ($article->image)
                        <img src="{{ asset('storage/' . $article->image) }}" class="img-thumbnail mt-2" alt="Gambar Artikel">
                    @endif
                </div>
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $article->title) }}" required>
                </div>
                <div class="form-group">
                    <label for="content">Konten</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content', $article->content) }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
