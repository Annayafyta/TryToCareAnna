@extends('layout')

@section('content')
{{-- <div class="container mt-4">
    <div class="d-flex justify-content-between mb-2">
        <h1>Try To Care</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Buat Artikel</a>
    </div> --}}
    {{-- <div class="container mt-3">
        <div class=""> --}}
            {{-- d-flex justify-content-between mb-2 --}}
            {{-- <h1>Try To Care</h1> --}}
            {{-- <a href="{{ route('posts.create') }}" class="btn btn-info">Buat Artikel</a>
        </div> --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    {{-- <div class="row">
        @foreach($articles as $article)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                        <a href="{{ route('articles.store', $article->id) }}" class="btn btn-info">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}


    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->judul }}</h5>
                        <p class="card-text">{{ Str::limit($post->konten, 100) }}</p>
                        <p><small>Ditulis oleh: {{ $post->penulis }}</small></p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

    <div class="vd" style=" height : 480px ;">
        <div class="video-container">
            <video class="fun-frame" width="630" height="360" autoplay loop muted style="margin-left: 7vh">
                <source src="{{ asset('storage/foto/bg.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="video-container">
            <video class="fun-frame" width="630" height="360" autoplay loop muted>
                <source src="{{ asset('storage/foto/gb.mp4') }}" type="video/mp4">
            </video>
        </div>

    </div>

{{--
<div class="container mt-4">
<div class=""> --}}
    {{-- d-flex justify-content-between mb-2 --}}
    {{-- <h1>Try To Care</h1> --}}
    {{-- <a href="{{ route('posts.create') }}" class="btn btn-info">Buat Artikel</a>
</div> --}}

  <section class="hero text-dark text-center">
    <div class="container">
        <h1 style="font-family: 'Georgia', serif;">Welcome to TRYTOCARE</h1>
        <p style="font-family: 'Georgia', serif;">Upaya untuk menunjukkan kepedulian atau perhatian terhadap sesuatu atau seseorang.</p>
        {{-- <a href="#" class="btn btn-light btn-lg">Join Us Today</a> --}}
    </div>
</section>


<section id="features" class="py-5" style="font-family: 'Georgia', serif;">
    <div class="container text-center" >
        <h2 class="text-dark">Sayangi Keluarga Anda</h2>
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card p-4 bg-light shadow rounded">
                    <div class="icon-wrapper">
                        <i class="fas fa-heart fa-3x text-primary"></i>
                    </div>
                    <img src="{{ asset('storage/foto/1.png') }}" alt="Heart icon representing empathy" class="img-fluid mt-3">
                    <h4>Empathy at Core</h4>
                    <p>TRYTOCARE helps you connect with others on a deeper level.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4 bg-light shadow rounded">
                    <div class="icon-wrapper">
                        <i class="fas fa-users fa-3x text-primary"></i>
                    </div>
                    <img src="{{ asset('storage/foto/2.png') }}" alt="Group of people symbolizing community support" class="img-fluid mt-3">
                    <h4>Community Support</h4>
                    <p>Join a caring community to share and receive support.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4 bg-light shadow rounded">
                    <div class="icon-wrapper">
                        <i class="fas fa-mobile-alt fa-3x text-primary"></i>
                    </div>
                    <img src="{{ asset('storage/foto/3.png') }}" alt="Mobile device representing easy access" class="img-fluid mt-3">
                    <h4>Easy to Use</h4>
                    <p>Access TRYTOCARE from your mobile device anytime, anywhere.</p>
                </div>
            </div>
            <div class="container text-center" >
                {{-- <h2 class="text-dark">Sayangi Keluarga Anda</h2> --}}
                <div class="row mt-4">
                    <div class="col-md-4 mb-4">
                        <div class="card p-4 bg-light shadow rounded">
                            <div class="icon-wrapper">
                                <i class="fas fa-heart fa-3x text-primary"></i>
                            </div>
                            <img src="{{ asset('storage/foto/1.png') }}" alt="Heart icon representing empathy" class="img-fluid mt-3">
                            <h4>Empathy at Core</h4>
                            <p>TRYTOCARE helps you connect with others on a deeper level.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card p-4 bg-light shadow rounded">
                            <div class="icon-wrapper">
                                <i class="fas fa-users fa-3x text-primary"></i>
                            </div>
                            <img src="{{ asset('storage/foto/2.png') }}" alt="Group of people symbolizing community support" class="img-fluid mt-3">
                            <h4>Community Support</h4>
                            <p>Join a caring community to share and receive support.</p>
                        </div>
                    </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4 bg-light shadow rounded">
                    <div class="icon-wrapper">
                        <i class="fas fa-mobile-alt fa-3x text-primary"></i>
                    </div>
                    <img src="{{ asset('storage/foto/3.png') }}" alt="Mobile device representing easy access" class="img-fluid mt-3">
                    <h4>Easy to Use</h4>
                    <p>Access TRYTOCARE from your mobile device anytime, anywhere.</p>
                </div>
            </div>
            {{-- <div class="col-md-4 mb-4">
                @foreach ( $artikels as $artikel )

                <div class="card p-4 bg-light shadow rounded">
                    <div class="icon-wrapper">
                        <i class="fas fa-mobile-alt fa-3x text-primary"></i>
                    </div>
                    <img src="{{ asset('storage/' . $artikel->image) }}" alt="Mobile device representing easy access" class="img-fluid mt-3" alt="{{ $artikel->judul }}">
                    <h4>{{ $artikel->judul }}</h4>
                    <p>{{ $artikel->konten }}.</p>
                </div>
                @endforeach
            </div> --}}
        </div>
    </div>
</section>

{{-- Total Data Produk:  {{$total}} --}}
{{-- <table class="table">
    <thead class="table-dark">
        <tr>
            <th>JUDUL</th>
            <th>KONTEN</th>
            <th>PENULIS</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($artikel as $key => $item)
        <tr>
            <td>{{$key+1 }}</td>
            <td>{{$item->judul}}</td>
            <td>{{$item->konten}}</td>
            <td>{{$item->penulis}}</td>
            <td><img src="{{ asset('storage/foto/'.$item->foto)}}" alt="" style="width: 50px; height:50px"></td>
        </tr>
    @endforeach

    </tbody>
</table> --}}


<section id="contact" class="py-5">
    <div class="container text-center">
        <h2>Contact Us</h2>
        <p>Adakah pertanyaan? Tanyakan pada kami</p>
        <a href="mailto:annayafyta@gmail.com" class="btn btn-info">Email Us</a>
    </div>
</section>


@endsection
