@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Kontak Kami</h2>

    <div class="row mt-4">
        <div class="col-md-6">
            <h5>Informasi Kontak</h5>
            <p><strong>Nama Perusahaan:</strong> Try To Care</p>
            <p><strong>Alamat:</strong> Jl. Hatihati No. 55, Kota Tasikmalaya, Provinsi Jawa Barat, Kode Pos 4946</p>
            <p><strong>Telepon:</strong> (089) 655-5555</p>
            <p><strong>Email:</strong> <a href="mailto:info@perusahaan.com">TTC@gmail.com</a></p>
            <p><strong>Website:</strong> <a href="http://www.perusahaan.com" target="_blank">www.trytocarena.com</a></p>
        </div>

        <div class="col-md-6">
            <h5>Formulir Kontak</h5>
            <form>
                <div class="form-group">
                    <label for="name">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Pesan:</label>
                    <textarea class="form-control" id="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
    </div>

    <div class="text-center mt-4">
        <h5>Ikuti Kami di Sosial Media</h5>
        {{-- <a href="http://facebook.com/namaakun" class="btn btn-outline-primary btn-sm" target="_blank">Facebook</a> --}}
        <a href="http://instagram.com/bedgilchocomilk" class="btn btn-outline-danger btn-sm" target="_blank">Instagram</a>
        {{-- <a href="http://twitter.com/namaakun" class="btn btn-outline-info btn-sm" target="_blank">Twitter</a> --}}
    </div>
</div>
<br>
<br>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
