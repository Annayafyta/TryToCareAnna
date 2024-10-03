@extends('layout')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parenting Articles</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href={{ asset('assets/bootstrap/css/bootstrap.min.css')}}>

    <style>
        body {
    font-family: 'Georgia', serif;
    background-color: #dbe8f3 ;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.section-header h1 {
    font-size: 2em;
    color: #5a5a5a;
    border-bottom: 2px solid #dcdcdc;
    padding-bottom: 10px;
    margin-bottom: 20px;
}

.articles-label h2 {
    font-size: 1.5em;
    color: #4d774e;
    border-bottom: 2px dotted #b2c883;
    margin-bottom: 20px;
    text-align: center;
}

.articles-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.article-card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    padding: 15px;
    text-align: center;
}

.article-card img {
    width: 100%;
    height: auto;
    border-bottom: 2px solid #eaeaea;
    margin-bottom: 10px;
}

.article-card h3 {
    font-size: 1.2em;
    color: #4d774e;
    margin-bottom: 10px;
}

.article-card p {
    font-size: 0.95em;
    color: #666;
}

.article-card .comments {
    color: #999;
    font-style: italic;
}

    </style>
</head>
<body>
    <div class="container">

        <div class="section-header">
            <h1>Parenting / 4-6 Months</h1>
        </div>


        <div class="articles-label">
            <h2>Articles</h2>
        </div>

        <div class="articles-grid">

            <div class="article-card">
                <img src="{{ asset('storage/foto/bt.png') }}" alt="Toothbrush Image">
                <h3>Membersihkan Gigi dan Rongga Mulut Balita</h3>
                <p>Kegiatan membersihkan rongga mulut sebaiknya dimulai sejak dini. Pada bayi usia 0-6 bulan...</p>
                <p class="comments">(16 Comments)</p>
            </div>


            <div class="article-card">
                <img src="{{ asset('storage/foto/s2.png') }}" alt="Denmark Image">
                <h3>Mengapa Orangtua di Denmark Membiarkan Anak Tertidur di Stroller di Luar Restoran?</h3>
                <p>Terus terang, ketika kali pertama melihat anak dalam stroller di luar restoran...</p>
                <p class="comments">(0 Comments)</p>
            </div>


            <div class="article-card">
                <img src="{{ asset('storage/foto/h2.png') }}" alt="Image Placeholder">
                <h3>Suka Duka Hiperlaktasi</h3>
                <p>Hiperlaktasi membuat saya harus sering pumping dan baju saya jadi basah terus...</p>
                <p class="comments">(5 Comments)</p>
            </div>


            <div class="article-card">
                <img src="{{ asset('storage/foto/mata.png') }}" alt="Baby Image">
                <h3>Kelainan Mata Pada Bayi</h3>
                <p>Saya sedang mencari info mengenai PHPV yaitu sejenis kelainan mata akibat PHPV...</p>
                <p class="comments">(2 Comments)</p>
            </div>

            <div class="article-card">
                <img src="{{ asset('storage/foto/bt.png') }}" alt="Toothbrush Image">
                <h3>Membersihkan Gigi dan Rongga Mulut Balita</h3>
                <p>Kegiatan membersihkan rongga mulut sebaiknya dimulai sejak dini. Pada bayi usia 0-6 bulan...</p>
                <p class="comments">(16 Comments)</p>
            </div>


            <div class="article-card">
                <img src="{{ asset('storage/foto/s2.png') }}" alt="Denmark Image">
                <h3>Mengapa Orangtua di Denmark Membiarkan Anak Tertidur di Stroller di Luar Restoran?</h3>
                <p>Terus terang, ketika kali pertama melihat anak dalam stroller di luar restoran...</p>
                <p class="comments">(0 Comments)</p>
            </div>


            <div class="article-card">
                <img src="{{ asset('storage/foto/h2.png') }}" alt="Image Placeholder">
                <h3>Suka Duka Hiperlaktasi</h3>
                <p>Hiperlaktasi membuat saya harus sering pumping dan baju saya jadi basah terus...</p>
                <p class="comments">(5 Comments)</p>
            </div>


            <div class="article-card">
                <img src="{{ asset('storage/foto/mata.png') }}" alt="Baby Image">
                <h3>Kelainan Mata Pada Bayi</h3>
                <p>Saya sedang mencari info mengenai PHPV yaitu sejenis kelainan mata akibat PHPV...</p>
                <p class="comments">(2 Comments)</p>
            </div>

            <div class="article-card">
                <img src="{{ asset('storage/foto/bt.png') }}" alt="Toothbrush Image">
                <h3>Membersihkan Gigi dan Rongga Mulut Balita</h3>
                <p>Kegiatan membersihkan rongga mulut sebaiknya dimulai sejak dini. Pada bayi usia 0-6 bulan...</p>
                <p class="comments">(16 Comments)</p>
            </div>


            <div class="article-card">
                <img src="{{ asset('storage/foto/hiper.png') }}" alt="Denmark Image">
                <h3>Mengapa Orangtua di Denmark Membiarkan Anak Tertidur di Stroller di Luar Restoran?</h3>
                <p>Terus terang, ketika kali pertama melihat anak dalam stroller di luar restoran...</p>
                <p class="comments">(0 Comments)</p>
            </div>


            <div class="article-card">
                <img src="{{ asset('storage/foto/h2.png') }}" alt="Image Placeholder">
                <h3>Suka Duka Hiperlaktasi</h3>
                <p>Hiperlaktasi membuat saya harus sering pumping dan baju saya jadi basah terus...</p>
                <p class="comments">(5 Comments)</p>
            </div>


            <div class="article-card">
                <img src="{{ asset('storage/foto/mata.png') }}" alt="Baby Image">
                <h3>Kelainan Mata Pada Bayi</h3>
                <p>Saya sedang mencari info mengenai PHPV yaitu sejenis kelainan mata akibat PHPV...</p>
                <p class="comments">(2 Comments)</p>
            </div>

        </div>
    </div>
</body>
</html>



@endsection

<script src={{asset('assets/bootstrap/js/bootstrap.min.js')}}></script>
