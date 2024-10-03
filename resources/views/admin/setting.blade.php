<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Akun</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<div class="container mt-5">
    <a href="/admin/dashboard" class="btn btn-light mb-4"><i class="fas fa-arrow-left"></i> Kembali</a>
    <h2>Pengaturan Akun</h2>
    <form>
        <div class="form-group">
            <label for="username">Nama Pengguna</label>
            <input type="text" class="form-control" id="username" placeholder="Masukkan Nama Pengguna">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
        </div>

        <h4>Ganti Kata Sandi</h4>
        <div class="form-group">
            <label for="oldPassword">Kata Sandi Lama</label>
            <input type="password" class="form-control" id="oldPassword" placeholder="Masukkan Kata Sandi Lama">
        </div>
        <div class="form-group">
            <label for="newPassword">Kata Sandi Baru</label>
            <input type="password" class="form-control" id="newPassword" placeholder="Masukkan Kata Sandi Baru">
        </div>
        <div class="form-group">
            <label for="confirmPassword">Konfirmasi Kata Sandi Baru</label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="Konfirmasi Kata Sandi Baru">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>

    <hr>

    <h4>Notifikasi</h4>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="emailNotification">
        <label class="form-check-label" for="emailNotification">Aktifkan Email Notifikasi</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="appNotification">
        <label class="form-check-label" for="appNotification">Aktifkan Notifikasi Aplikasi</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="updateNotification">
        <label class="form-check-label" for="updateNotification">Pembaruan</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="newMessageNotification">
        <label class="form-check-label" for="newMessageNotification">Pesan Baru</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="specialOfferNotification">
        <label class="form-check-label" for="specialOfferNotification">Penawaran Khusus</label>
    </div>

    <hr>

    <h4>Tampilan</h4>
    <div class="form-group">
        <label>Tema</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="themeOptions" id="lightTheme" value="light">
            <label class="form-check-label" for="lightTheme">Terang</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="themeOptions" id="darkTheme" value="dark">
            <label class="form-check-label" for="darkTheme">Gelap</label>
        </div>
    </div>
    <div class="form-group">
        <label>Ukuran Font</label>
        <select class="form-control">
            <option>Kecil</option>
            <option selected>Sedang</option>
            <option>Besar</option>
        </select>
    </div>

    <hr>

    <h4>Privasi</h4>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="publicProfile">
        <label class="form-check-label" for="publicProfile">Profil Publik</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="shareActivity">
        <label class="form-check-label" for="shareActivity">Bagikan Aktivitas</label>
    </div>
    <button class="btn btn-danger mt-2">Hapus Akun</button>

    <hr>

    <h4>Tentang</h4>
    <p>Versi Aplikasi: 7.5.0</p>
    <a href="#">Kebijakan Privasi</a> | <a href="#">Syarat dan Ketentuan</a>

    <hr>

    <button class="btn btn-secondary">Keluar dari Akun</button>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
