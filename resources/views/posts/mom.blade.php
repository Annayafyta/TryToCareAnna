@extends('layout')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
          .highlight-item {
            text-align: center;
            padding: 20px;
        }
        .highlight-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .doctor-card {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
        }
        .doctor-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }
        .highlight-box {
            background-color: #00bcd4;
            padding: 20px;
            color: white;
            border-radius: 10px;
        }
        .highlight-box h5 {
            font-size: 18px;
            font-weight: bold;
        }
        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }
</style>
<div class="container mt-5">
    <h4 class="mb-4"><b>Moms</b></h4>
    <div class="row">

        <div class="col-lg-3 col-md-4 col-sm-6 highlight-item">
            <img src="{{ asset('storage/parenting/mom1.png') }}" alt="Program Hamil">
            <h6>Program Hamil</h6>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 highlight-item">
            <img src="{{ asset('storage/parenting/mom2.png') }}" alt="Fase Kehamilan">
            <h6>Fase Kehamilan</h6>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 highlight-item">
            <img src="{{ asset('storage/parenting/mom3.png') }}" alt="Fase Anak">
            <h6>Fase Anak</h6>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 highlight-item">
            <img src="{{ asset('storage/parenting/mom4.png') }}" alt="Bundapedia">
            <h6>Bundapedia</h6>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 highlight-item">
            <img src="{{ asset('storage/parenting/mom2.png') }}" alt="Dongeng Anak">
            <h6>Dongeng Anak</h6>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 highlight-item">
            <img src="{{ asset('storage/parenting/mom4.png') }}" alt="Rekomendasi Produk">
            <h6>Rekomendasi Produk</h6>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 highlight-item">
            <img src="{{ asset('storage/parenting/mom1.png') }}" alt="Nama Bayi">
            <h6>Nama Bayi</h6>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 highlight-item">
            <img src="{{ asset('storage/parenting/mom2.png') }}" alt="Resep">
            <h6>Gender</h6>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">

        <div class="col-md-4">
            <div class="highlight-box">
                <h5>BERSAMA DOKTER & AHLI</h5>
                <p>Benarkah Persiapan Kehamilan yang Tepat Harus Dimulai sejak Awal Menikah?</p>
                <hr>
                <p>Cara Mengatasi Morning Sickness pada Ibu Hamil dengan Asam Lambung</p>
            </div>
        </div>

        <div class="col-md-8">
            <div id="doctorCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="doctor-card">
                                    <img src="https://via.placeholder.com/80" alt="Doctor 1">
                                    <h6>dr. Frieda Handayani Kawanto, Sp.A, Subsp.G.H.</h6>
                                    <p>Dokter Spesialis Anak Subspesialis Gastrohepatologi</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="doctor-card">
                                    <img src="https://via.placeholder.com/80" alt="Doctor 2">
                                    <h6>dr. Ilham Utama Surya, Sp.OG</h6>
                                    <p>Spesialis Obgin - Kebidanan & Kandungan</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="doctor-card">
                                    <img src="https://via.placeholder.com/80" alt="Doctor 3">
                                    <h6>dr. Sofian Kurnia Marsa Widjaya, Sp.PD</h6>
                                    <p>Dokter Spesialis Penyakit Dalam</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="doctor-card">
                                    <img src="https://via.placeholder.com/80" alt="Doctor 4">
                                    <h6>dr. Aida Riyanti, Sp.OG, Subsp. F.E.R., MSc.Rep</h6>
                                    <p>Dokter Spesialis Obstetri dan Ginekologi</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#doctorCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#doctorCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="mt-3">
                <a href="#" class="btn btn-info">KE HALAMAN BERSAMA DOKTER & AHLI</a>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@endsection
