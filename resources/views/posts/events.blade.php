@extends('layout')

@section('content')

<style>

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #333;
}

.events-section {
    margin-bottom: 40px;
}

h2 {
    background-color: #f6d4d3;
    padding: 10px;
    font-size: 1.5em;
    margin: 0;
}

.event-grid {
    display: flex;
    justify-content: space-between;
}

.event-box {
    width: 48%;
    background-color: white;
    border: 1px solid #ddd;
    padding: 15px;
    margin-top: 10px;
}

.event-box img {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
}

h3 {
    font-size: 1.2em;
    color: #333;
    margin-bottom: 10px;
}

p {
    color: #666;
    line-height: 1.6;
}

.comments {
    font-size: 0.9em;
    color: #999;
}
</style>


<div class="container">
    <h1>Try To Care Events</h1>


    <div class="events-section upcoming">
        <h2>Upcoming Events</h2>
        <div class="event-box">
            <p>No upcoming events at this time.</p>
        </div>
    </div>


    <div class="events-section past">
        <h2>Past Events</h2>
        <div class="event-grid">

            <div class="event-box">
                <img src="{{ asset('storage/parenting/f1.png') }}" alt="TUMBukber Event">
                <h3> Memahami Arti Penting Liburan Keluarga dan Efeknya bagi Anak</h3>
                <p>Ada banyak alasan mengapa liburan keluarga tidak perlu tertunda. Mulai dari sulit mencari waktu yang tepat, mahal, atau anak-anak yang masih kecil, namun liburan keluarga tetap penting untuk diadakan.</p>
                <p class="comments">(2 Comments)</p>
            </div>


            <div class="event-box">
                <img src="{{ asset('storage/parenting/f2.png') }}" alt="TUMBukber Event">
                <h3> Hangatkan Meja Makan Dengan Canda Tawa Bersama Sang Buah Hati</h3>
                <p> Momen ini bukan hanya tentang menyantap makanan, tetapi juga merayakan kebersamaan. Dengan bercerita, bermain, dan berbagi tawa, ikatan keluarga semakin kuat. Suasana hangat ini menciptakan kenangan indah yang akan dikenang selamanya.</p>
                <p class="comments">(2 Comments)</p>
            </div>

            <div class="event-box">
                <img src="{{ asset('storage/parenting/f3.png') }}" alt="TUMBreastfeeding Event">
                <h3> Siapkan Sandaran Anda Ketika Putri/Putra Anda Sedang Bersedih</h3>
                <p>The Urban Mama seperti biasa menyelenggarakan acara spesial tentang ASI dan menyusui pada bulan Agustus. Kali ini temanya tentang manajemen ASI Perah yang disampaikan oleh #TUMExpert F.B. Monika.</p>
                <p class="comments">(6 Comments)</p>
            </div>

            <div class="event-box">
                <img src="{{ asset('storage/parenting/f4.png') }}" alt="TUMBreastfeeding Event">
                <h3> A-Z Manajemen ASI Perah bersama F.B Monika</h3>
                <p>The Urban Mama seperti biasa menyelenggarakan acara spesial tentang ASI dan menyusui pada bulan Agustus. Kali ini temanya tentang manajemen ASI Perah yang disampaikan oleh #TUMExpert F.B. Monika.</p>
                <p class="comments">(6 Comments)</p>
            </div>

        </div>
        
    </div>
</div>

@endsection
