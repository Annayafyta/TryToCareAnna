@extends('layout')

@section('content')
    <div class="container" style="margin-top: 5vh">
        <div class="header-bg">
            <h1>About Us</h1>
            <p>Meet the team that makes it all happen.</p>
        </div>

        <div class="row" style="margin-top: 3vh">

            <div class="col-md-4">
                <div class="card team-member">
                    <img src="{{ asset('storage/foto/image.png') }}" alt="Team Member 1">
                    <div class="card-body">
                        <h5 class="card-title">Raden Reyza Rifansyah</h5>
                        <p class="card-text">Chief Executive Officer</p>
                        <p>29 Mei 2002</p>
                        <p>Garut</p>
                        <h5 class="card-title">Motivasi :</h5>
                        <p>Semangatlah selagi CTO-nya masih ANNAYAFYTA</p>
                        <div class="social-links">
                            <a href="#">LinkedIn</a>
                            <a href="#">Twitter</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card team-member">
                    <img src="{{ asset('storage/foto/anna.png') }}" alt="Team Member 2">
                    <div class="card-body">
                        <h5 class="card-title">Annayafyta</h5>
                        <p class="card-text">Chief Technology Officer</p>
                        <p>05 Mei 2007</p>
                        <p>Garut</p>
                        <h5 class="card-title">Motivasi :</h5>
                        <p>Semangatlah selagi di dunia masih ada ultramilk rasa Taro</p>
                        <div class="social-links">
                            <a href="#">LinkedIn</a>
                            <a href="#">Twitter</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card team-member">
                    <img src="{{ asset('storage/foto/liam3.png') }}" alt="Team Member 3">
                    <div class="card-body">
                        <h5 class="card-title">Liam Pangestu</h5>
                        <p class="card-text">Chief Marketing Officer</p>
                        <p>19 Mei 2002</p>
                        <p>Bandung</p>
                        <h5 class="card-title">Motivasi :</h5>
                        <p>Semangatlah selagi CTO-nya masih ANNAYAFYTA</p>
                        <div class="social-links">
                            <a href="#">LinkedIn</a>
                            <a href="#">Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <h2>Our Mission</h2>
        <p>
            "Memberdayakan orang tua dengan informasi, dukungan, dan sumber daya yang dibutuhkan untuk membesarkan anak dengan penuh kasih sayang dan kepercayaan diri."
        </p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





@endsection
