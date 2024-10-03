@extends('layout')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href={{ asset('assets/bootstrap/css/bootstrap.min.css')}}>
    <style>
      body {
    font-family: 'Verdana', sans-serif;
    background-color: #ffffff;
    color: #ffffff;
}

.container {
    display: flex;
    justify-content: space-around;
    padding: 20px;
}

.column {
    width: 30%;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    border: 2px solid #b2c883;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.frame {
    transition: all 0.3s ease;
}

.frame:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

h3 {
    font-size: 1.4em;
    color: #4d774e;
    border-bottom: 2px solid #b2c883;
    padding-bottom: 10px;
    margin-bottom: 10px;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin: 10px 0;
}

a {
    text-decoration: none;
    color: #4d774e;
    font-weight: bold;
    font-size: 1.1em;
}

a:hover {
    color: #345834;
    text-decoration: underline;
}


    </style>

</head>
<body>
        <div class="container">
            <div class="column frame">
                <h3>Browse Parenting : only partially available</h3>
                <ul>
                    <li><a href="/mom">Moms</a></li>
                    <li><a href="/46">4-6 Months</a></li>
                    <li><a href="#">10-12 Months</a></li>
                    <li><a href="#">Pre-School</a></li>
                    <li><a href="#">Children</a></li>
                    <li><a href="#">Pregnancy</a></li>
                    <li><a href="#">Teens</a></li>
                    <li><a href="#">Young Moms</a></li>
                    <li><a href="#">1-3 Months</a></li>
                    <li><a href="#">7-9 Months</a></li>
                    <li><a href="#">Toddler</a></li>
                    <li><a href="/dady">Dads</a></li>
                    <li><a href="#">Premature Babies</a></li>
                    <li><a href="#">Special Needs</a></li>
                    <li><a href="#">Twins</a></li>
                </ul>
            </div>

            <div class="column frame">
                <h3>Browse by Topics : (not available)</h3>
                <ul>
                    <li><a href="#">Our Stories</a></li>
                    <li><a href="#">Book Reviews</a></li>
                    <li><a href="#">Style & Gears</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Featured Try To Care</a></li>
                    <li><a href="#">Topics</a></li>
                    <li><a href="#">Expert Explains</a></li>
                    <li><a href="#">Product Reviews</a></li>
                    <li><a href="#">Activities</a></li>
                    <li><a href="#">Announcements</a></li>
                    <li><a href="#">Do-It-Yourself</a></li>
                    <li><a href="#">Featured Urban Papa</a></li>
                    <li><a href="#">My Party</a></li>
                </ul>
            </div>

            <div class="column frame">
                <h3>Browse Experts : (not available)</h3>
                <ul>
                    <li><a href="#">Dokter Anak</a></li>
                    <li><a href="#">Dokter SpOG</a></li>
                    <li><a href="#">Psikolog</a></li>
                    <li><a href="#">Konselor Laktasi</a></li>
                    <li><a href="#">Property Enthusiast</a></li>
                    <li><a href="#">Dokter Mata</a></li>
                    <li><a href="#">Financial Advisor</a></li>
                    <li><a href="#">Arsitektur</a></li>
                    <li><a href="#">Ahli Gizi</a></li>
                    <li><a href="#">Dokter Gigi</a></li>
                </ul>
            </div>
        </div>
    </body>
    </html>




@endsection

<script src={{asset('assets/bootstrap/js/bootstrap.min.js')}}></script>
