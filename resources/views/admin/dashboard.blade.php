<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
        .table th {
            background-color: #14a5a5;
            color: white;
        }
        .img-thumbnail {
            width: 100px;
            height: auto;
        }
        .progress-bar {
            animation: grow 2s ease-in-out forwards;
        }
        @keyframes grow {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }
    </style>
</head>
<body>

{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand text-center" href="#"><i><b>ADMIN TRY TO CARE    </b></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#"><i><b>Profile</b></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i><b>Logout</b></i></a>
          </li>
        </ul>
      </div>
</nav> --}}



<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand text-center" href="#"><i><b>ADMIN TRY TO CARE</b></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        {{-- <li class="nav-item">
          <a class="nav-link" href="#"><i><b>Profile</b></i></a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="/profle/update"><i><b>Settings</b></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/"><i><b>Logout</b></i></a>
        </li>
      </ul>
    </div>
  </nav>

  {{-- <div class="container mt-5">
    <h3 class="text-info">Artikel Ayah</h3>
    <div class="progress">
        <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
            80%
        </div>
    </div>
    <h3 class="text-info">Artikel Ibu</h3>
    <div class="progress">
        <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
            60%
        </div>
    </div>
</div> --}}
<br>
<div class="container">
    {{-- <h2 class="text-center">Admin Dashboard</h2> --}}
    <a href="{{ route('admin.create') }}" class="btn btn-info mb-3">Buat Artikel Baru</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Daftar Artikel</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Foto</th>
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>
                                <img src="{{ asset('storage/images/' . $article->image) }}" class="img-thumbnail" alt="Gambar Artikel"> <!-- Tampilkan gambar -->
                            </td>
                            <td>{{ $article->title }}</td>
                            <td>{{ Str::limit($article->content, 50) }}</td>
                            <td>{{ $article->created_at }}</td>
                            <td>
                                <form action="{{ route('admin.delete', $article->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus artikel ini?')">Hapus</button>
                                </form>
                                <a href="{{ route('admin.edit', $article->id) }}" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.querySelectorAll('.progress-bar').forEach(function(progressBar){
        let value = progressBar.getAttribute('aria-valuenow');
        progressBar.style.width ='0%';

        setTimeout(function() => {
            progressBar.style.width = value + '%';
        }, 500);
    });
</script>
</body>
</html>
