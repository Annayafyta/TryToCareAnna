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
            <h1>Dads</h1>
        </div>


        <div class="articles-label">
            <h2>Articles</h2>
        </div>

        <div class="articles-grid">

            <div class="article-card">
                <img src="{{ asset('storage/foto/1d.png') }}" alt="Toothbrush Image">
                <h3>Pentingnya peran seorang ayah</h3>
                <p>Kehadiran ayah menyeimbangkan peran orang tua dalam mendidik anak.
                    Jika ibu cenderung memberikan perhatian emosional dan perawatan,
                    ayah sering kali membawa perspektif yang berbeda dalam cara memberikan
                    kasih sayang, disiplin, dan bimbingan.</p>
                <p class="comments">(16 Comments)</p>
            </div>


            <div class="article-card">
                <img src="{{ asset('storage/foto/2d.png') }}" alt="Denmark Image">
                <h3>Dampak dari sikap hangat ayah</h3>
                <p>Anak-anak yang merasakan kasih sayang dan kehangatan dari ayahnya
                     cenderung memiliki keseimbangan emosional yang lebih baik.
                     Mereka lebih mampu mengenali dan mengekspresikan emosi dengan
                      cara yang sehat serta mengembangkan rasa percaya diri yang kuat.
                       Kehangatan ayah memberikan rasa aman, sehingga anak merasa dicintai dan dihargai.</p>
                <p class="comments">(0 Comments)</p>
            </div>


            <div class="article-card">
                <img src="{{ asset('storage/foto/3d.png') }}" alt="Image Placeholder">
                <h3>Dampingi terus buah hatimu</h3>
                <p>Seorang anak perempuan yang sejak kecil terbiasa mandiri
                    akan tumbuh menjadi individu yang percaya diri dan memiliki
                    kemampuan pemecahan masalah yang baik. Kemandirian sejak dini
                    membuatnya lebih tangguh dalam menghadapi tantangan serta memiliki
                    kontrol yang lebih baik atas emosinya. Ia juga cenderung menjadi lebih disiplin,
                    bertanggung jawab, dan tidak mudah bergantung pada orang lain.</p>
                <p class="comments">(5 Comments)</p>
            </div>


            <div class="article-card">
                <img src="{{ asset('storage/foto/5d.png') }}" alt="Baby Image">
                <h3>Hindari melampiaskan amarah kepada sang putri</h3>
                <p>Hindari melampiaskan amarah kepada sang putri,
                     karena itu dapat merusak hubungan emosional
                      antara ayah dan anak. Sebaiknya, berkomunikasilah
                       dengan tenang dan sabar. Meluapkan emosi secara
                       negatif bisa menimbulkan rasa takut, cemas, dan
                       kurangnya rasa percaya diri pada anak. Anak perempuan
                       butuh bimbingan penuh kasih sayang untuk tumbuh dengan baik..</p>
                <p class="comments">(2 Comments)</p>
            </div>

            <div class="article-card">
                <img src="{{ asset('storage/foto/8.png') }}" alt="Toothbrush Image">
                <h3>Bertanggung jawablah meskipun itu hal kecil</h3>
                <p>Bertanggung jawab terhadap hal-hal kecil berarti
                     menjalankan kewajiban dan komitmen, tidak peduli
                      seberapa kecil atau tidak signifikan tampaknya tugas tersebut.
                      Ini mencerminkan integritas dan kedisiplinan, serta menunjukkan
                      komitmen terhadap kualitas dan konsistensi.</p>
                <p class="comments">(16 Comments)</p>
            </div>


            <div class="article-card">
                <img src="{{ asset('storage/foto/7.png') }}" alt="Denmark Image">
                <h3>Pengasuhan yang Konsisten</h3>
                <p>Konsistensi dalam aturan dan disiplin membantu anak memahami
                    batasan dan ekspektasi. Ayah yang konsisten memberikan rasa
                    stabilitas dan kejelasan, yang penting untuk perkembangan
                     perilaku dan emosional anak.</p>
                <p class="comments">(0 Comments)</p>
            </div>


            <div class="article-card">
                <img src="{{ asset('storage/foto/8d.png') }}" alt="Image Placeholder">
                <h3>Kurangnya Dukungan Pendidikan</h3>
                <p> Tidak terlibat dalam proses pendidikan anak atau
                     mengabaikan kebutuhan akademis mereka dapat menghambat
                     perkembangan intelektual dan motivasi belajar anak.
                      Ini bisa menyebabkan penurunan prestasi akademis dan
                       kurangnya minat dalam belajar.</p>
                <p class="comments">(5 Comments)</p>
            </div>


            <div class="article-card">
                <img src="{{ asset('storage/foto/3d.png') }}" alt="Baby Image">
                <h3>Temani hari-harinya agar tak canggung saat dewasa</h3>
                <p>Sedari kecil sang buah hati sangatlah membutuhkan bimbingan untuk setiap hal
                    yang baru ia lakukan. Perlulah orang dewasa mendampinginya untuk mengawasi tumbuh
                    kembang sang buah hati.
                </p>
                <p class="comments">(2 Comments)</p>
            </div>
        </div>
    </div>
</body>
</html>



@endsection

<script src={{asset('assets/bootstrap/js/bootstrap.min.js')}}></script>
