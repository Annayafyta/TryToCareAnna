@extends('layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biaya Pendidikan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .card-header {
            background-color: #00b7ff;
            color: white;
        }
        .card-body {
            background-color: #f8f9fa;
        }
        table th, table td {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 10vh">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Biaya Pendidikan Anak</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-subtitle mb-2 text-muted">Informasi Biaya Pendidikan</h5>
                        <p class="card-text">Berikut adalah rincian biaya pendidikan untuk berbagai tingkat pendidikan:</p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tingkat Pendidikan</th>
                                    <th>Biaya (per tahun)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>SD (Sekolah Dasar)</td>
                                    <td>Rp 5.000.000 - Rp 10.000.000</td>
                                </tr>
                                <tr>
                                    <td>SMP (Sekolah Menengah Pertama)</td>
                                    <td>Rp 7.000.000 - Rp 15.000.000</td>
                                </tr>
                                <tr>
                                    <td>SMK (Sekolah Menengah Kejuruan)</td>
                                    <td>Rp 10.000.000 - Rp 20.000.000</td>
                                </tr>
                                <tr>
                                    <td>Kuliah (Universitas Negeri)</td>
                                    <td>Rp 10.000.000 - Rp 30.000.000</td>
                                </tr>
                                <tr>
                                    <td>Kuliah (Universitas Swasta)</td>
                                    <td>Rp 20.000.000 - Rp 60.000.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5" style="margin-top: 10vh; margin-left: -30vh">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sekolah Dasar</h3>
                     </div>
                     <div class="card-body">
                        <h5 class="card-subtitle mb-2 text-muted">Informasi Biaya Pendidikan</h5>
                        <p class="card-text">Berikut adalah rincian biaya pendidikan untuk berbagai sekolah di Indonesia :</p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Sekolah</th>
                                    <th>Biaya (per tahun)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sekolah Dasar Nusantara Cerdas</td>
                                    <td>Rp 5.000.000 - Rp 10.000.000</td>
                                </tr>
                                <tr>
                                    <td>Sekolah Dasar Bintang Muda</td>
                                    <td>Rp 4.000.000 - Rp 7.000.000</td>
                                </tr>
                                <tr>
                                    <td>Sekolah Dasar Permata Bangsa</td>
                                    <td>Rp 5.000.000 - Rp 9.000.000</td>
                                </tr>
                                <tr>
                                    <td>Sekolah Dasar Pelita Generasi</td>
                                    <td>Rp 8.000.000 - Rp 10.000.000</td>
                                </tr>
                                <tr>
                                    <td>Sekolah Dasar Karya Utama</td>
                                    <td>Rp 3.500.000 - Rp 5.000.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
             </div>
         </div>

         <div class="col-md-5" style="margin-top: 10vh; margin-left: 6vh">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sekolah Menengah Pertama</h3>
                 </div>
                 <div class="card-body">
                    <h5 class="card-subtitle mb-2 text-muted">Informasi Biaya Pendidikan</h5>
                    <p class="card-text">Berikut adalah rincian biaya pendidikan untuk berbagai sekolah di Indonesia :</p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Sekolah</th>
                                <th>Biaya (per tahun)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sekolah Menengah Pertama Sinar Abadi</td>
                                <td>Rp 5.000.000 - Rp 10.000.000</td>
                            </tr>
                            <tr>
                                <td>Sekolah Menengah Pertama Terampil Mandiri</td>
                                <td>Rp 4.000.000 - Rp 7.000.000</td>
                            </tr>
                            <tr>
                                <td>Sekolah Menengah Citra Bangsa</td>
                                <td>Rp 5.000.000 - Rp 9.000.000</td>
                            </tr>
                            <tr>
                                <td>Sekolah Menengah Pelita Generasi</td>
                                <td>Rp 8.000.000 - Rp 10.000.000</td>
                            </tr>
                            <tr>
                                <td>Sekolah Menengah Harmoni Karya</td>
                                <td>Rp 3.500.000 - Rp 5.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
         </div>
     </div>
     <div class="col-md-5" style="margin-top: -80vh; margin-left: 100vh">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sekolah Menengah Kejuruan</h3>
             </div>
             <div class="card-body">
                <h5 class="card-subtitle mb-2 text-muted">Informasi Biaya Pendidikan</h5>
                <p class="card-text">Berikut adalah rincian biaya pendidikan untuk berbagai sekolah di Indonesia :</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Sekolah</th>
                            <th>Biaya (per tahun)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sekolah Menengah Kejuruan Sinar Abadi</td>
                            <td>Rp 10.000.000 - Rp 15.000.000</td>
                        </tr>
                        <tr>
                            <td>Sekolah Menengah Kejuruan Terampil Mandiri</td>
                            <td>Rp 9.000.000 - Rp 19.000.000</td>
                        </tr>
                        <tr>
                            <td>Sekolah Menengah Kejuruan Citra Bangsa</td>
                            <td>Rp 11.000.000 - Rp 20.000.000</td>
                        </tr>
                        <tr>
                            <td>Sekolah Menengah Kejuruan Pelita Generasi</td>
                            <td>Rp 8.000.000 - Rp 10.000.000</td>
                        </tr>
                        <tr>
                            <td>Sekolah Menengah Kejuruan Harmoni Karya</td>
                            <td>Rp 15.500.000 - Rp 21.000.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
     </div>
 </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
