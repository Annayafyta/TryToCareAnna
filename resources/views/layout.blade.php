<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TTC</title>
    <link rel="stylesheet" href={{ asset('assets/bootstrap/css/bootstrap.min.css')}}>
    <style>
        /* Custom Styles */
        body {
            font-family: 'Verdana', sans-serif;
            background-color: #dbe8f3 ;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
             margin: 10px 0;
        }

        .navbar {
          background-color: #f7f3f1;
        }

        .navbar-nav .nav-link {
          color: #4b4b4b;
        }

        .navbar-nav{
            font-family: 'Verdana', sans-serif;

        }
        .header-logo {
          font-size: 36px;
          color: #6a9347;
          font-weight: bold;
        }

        .logo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }
        .sub-heading {
          font-size: 16px;
          color: #838383;
        }

        .icon-box {
          text-align: center;
          padding: 20px;
          border-radius: 10px;
          background-color: #f7f3f1;
          margin-bottom: 10px;
        }

        .icon-box img {
          width: 40px;
          margin-bottom: 10px;
        }

        .icon-box p {
          font-weight: bold;
          font-size: 14px;
          color: #4b4b4b;
        }
        .card {
    position: relative;
    overflow: hidden;
    background-color: #ffffff;
    transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.icon-wrapper {
    background-color: #f8f9fa;
    padding: 10px;
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
    transition: background-color 0.3s;
}

.icon-wrapper:hover {
    background-color: #e9ecef;
}

.card img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
}

.card h4 {
    margin-top: 15px;
    font-size: 1.25rem;
    font-weight: bold;
}

.card p {
    font-size: 1rem;
    color: #6c757d;
}

.card-shadow {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s;
}

.card-shadow:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}
.video-container {
    margin-left: 10vh;
    margin-top: 5vh;
    position: relative;
    display: inline-block;
    /* border: 5px solid #039dda ; */
    border-radius: 20px;
    padding: 8px;
    /* background: linear-gradient(45deg, #0dadec , #00b7ff ); */
    /* box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3); */
}

.fun-frame {
    /* box-shadow: 5px 5px 10px #000000; */

    /* border: 5px solid #0581b3 ; */
    border-radius: 20px;
    /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); */
}


@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
    100% {
        transform: scale(1);
    }
}

.video-container:hover .fun-frame {
    animation: pulse 1s infinite;
}
        .header-bg {
            background-color: #00b7ff;
            color: white;
            padding: 40px 0;
            text-align: center;
        }
        .team-member {
            border: 1px solid #e3e3e3;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .team-member img {
            width: 100%;
            height: auto;
        }
        .team-member .card-body {
            padding: 20px;
        }
        .team-member h5 {
            margin: 0;
        }
        .team-member p {
            color: #6c757d;
        }
        .team-member .social-links a {
            margin-right: 10px;
            color: #00b7ff;
            text-decoration: none;
        }
        .team-member .social-links a:hover {
            text-decoration: underline;
        }
      </style>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
    {{-- background-color: #dbe8f3 ; --}}
<body style="background-color: #dbe8f3;">
    {{-- style="background: linear-gradient(#85c0c2 15%, #469699 40%, #199fa3 55%)"/ --}}
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #00b7ff ;  ">
        <a class="navbar-brand header-logo" href="#"> <img src="{{ asset('storage/foto/logo.png') }}" class="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-light" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="posts" style="color: white">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/parenting" style="color: white">Parenting</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/biaya" style="color: white">Biaya Sekolah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/events" style="color: white">Events</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="#" style="color: white">Goodies</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="/about" style="color: white">About</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="#" style="color: white">Contribute</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="/contact" style="color: white">Contact</a>
            </li>
            {{-- <li class="nav-item ms-3"> --}}
                {{-- {{ route('search') }} --}}
                {{-- <form class="d-flex" action="" method="GET">
                  <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search" name="query">
                  <button class="btn btn-outline-light" type="submit">Cari</button>
                </form>
              </li> --}}
          </ul>
        </div>
      </nav>
      {{-- <iframe width="560" height="315" src="https://www.youtu.be.com/RroDlJMoDxU?si=W4CAr98WIvk5dHWc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
      {{-- <div class="video-container">
        <video class="fun-frame" width="630" height="360" autoplay loop muted>
            <source src="{{ asset('storage/foto/bg.mp4') }}" type="video/mp4">
        </video>
    </div> --}}
    {{-- <div class="video-container">
        <video class="fun-frame" width="630" height="360" autoplay loop muted>
            <source src="{{ asset('storage/foto/gb.mp4') }}" type="video/mp4">
        </video>
    </div> --}}
{{--
    <div class="container mt-4">
    <div class="">
        {{-- d-flex justify-content-between mb-2 --}}
        {{-- <h1>Try To Care</h1> --}}
        {{-- <a href="{{ route('posts.create') }}" class="btn btn-info">Buat Artikel</a>
    </div> --}}

      {{-- <section class="hero text-light text-center">
        <div class="container">
            <h1>Welcome to TRYTOCARE</h1>
            <p>Your trusted platform for empathy, support, and care.</p>
            {{-- <a href="#" class="btn btn-light btn-lg">Join Us Today</a> --}}
        {{-- </div>
    </section> --}}

    <!-- Features Section -->
    {{-- <section id="features" class="py-5">
        <div class="container text-center" >
            <h2 class="text-light">Sayangi Keluarga Anda</h2>
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
            </div>
        </div>
    </section> --}}



    <!-- Contact Section -->
    {{-- <section id="contact" class="py-5">
        <div class="container text-center">
            <h2>Contact Us</h2>
            <p>Have any questions? We'd love to hear from you!</p>
            <a href="mailto:support@trytocare.com" class="btn btn-primary">Email Us</a>
        </div>
    </section> --}}

    <!-- Footer -->
    {{-- <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 TRYTOCARE. All Rights Reserved.</p>
    </footer> --}}



@yield('content')
<!-- Footer -->
    <footer class="text-white text-center py-3" style="background-color: #00b7ff">
        <p>&copy; 2024 TRYTOCARE. All Rights Reserved.</p>
    </footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script src={{asset('assets/bootstrap/js/bootstrap.min.js')}}></script>
