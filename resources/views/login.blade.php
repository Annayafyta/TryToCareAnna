<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset ('assets/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <style>
        .logo {
            width: 30vh;
            height: 30vh;
            border-radius: 40%;
            /* align-items: center; */
            margin: auto;
        }
        .body {
            align-items: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-success bg-light">
        <div class="container-fluid">
            {{-- <a href="#" class="navbar-brand text-light text-center " >TRY TO CARE</a> --}}
            <img src="{{ asset('storage/foto/logo.png') }}" class="logo">
        </div>
    </nav>
    <div class="container">
        @if (Session::has('pesan'))
            <div class="alert alert-seccess">{{Session::get('pesan')}}</div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        Login
                    </div>
                    <div class="card-body">
                        <form method="post" action="/auth">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group mt-1">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>
                            <button type="submit" class="btn btn-secondary btn-block mt-3 w-100">Masuk</button>
                        </form>
                    </div>
                </div>
                <hr>
                <button class="btn btn-secondary btn-block" onclick="guestAccess()" style="margin-left: 15vh"><a href="posts">Masuk Sebagai Tamu</a></button>

                {{-- <div class="card mt-5">
                        <div class="card-header text-center">
                            <button type="submit" class="btn btn-success btn-block w-100"><a href="/regis" style="color: floralwhite;">REGISTER</a></button>
                        </div>
                </div> --}}
            </div>
        </div>
    </div>



</body>
</html>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src={{asset('assets/bootstrap/js/bootstrap.min.js')}}></script>

