<!doctype html>
<html lang="en">

<head>
    <title>admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <base href="{{asset('public')}}">

       <!-- FAVICON AND TOUCH ICONS  -->
   <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon_io/site.webmanifest') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body {
         background: #16a571;
        background-image: url("images/Topprofessional.jpg");
    }

    .text-white {
        color: white;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center" style="height: 100vh; align-items: center;">
            <div class="col-sm-12 col-md-4">
                <div class="card" style="background-color: #000000;">
                    <div class="card-header">
                    <div class="d-flex justify-content-center image Card mt-3">
                            <img class="direct-chat-img w-45" src="{{ asset('assets/img/logo.png') }}" alt="">
                        </div>
                        <h3 style="color:#ffff; text-align:center;">Dashboard Login</h3>
                    </div>
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <!-- <div class="d-flex justify-content-center image Card mt-3">
                            <img class="direct-chat-img w-25" src="{{ asset('assets/img/logo.png') }}" alt="">
                        </div> -->
                        <div class="box p-3">
                            <label for="email" style="color:#ffff;">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Enter your email...">
                        </div>
                        <div class="box px-3">
                            <label for="password" style="color:#ffff;">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Enter your password...">
                        </div>
                        <div class="box px-3 pt-2 text-right">
                            <a href="{{ route('password.request') }}" style="color:#ffff;">Forget Password?</a>
                        </div>
                        <center>
                            <button type="submit" class="btn btn-success mb-3 mt-3 text-white">Login</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>