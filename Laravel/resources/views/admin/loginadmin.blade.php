<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <title>Login Admin</title>
</head>

<body class="bgadmin">
    <div class="global-container-admin my-5">
        <div class="card loginadmin-form col-lg-5 no-gutters mt-5" style="background-color: rgb(255, 255, 255, 0.5)">
            <div class="card-body">
                <center>
                    <img src="img/logo.png" width="120">
                </center>
                <h1 class="card-title text-center" style="font-weight: bold">
                    Selamat Datang Admin
                </h1>


                @if (session()->has('LoginError'))
                    <div class="alert alert-danger alert-dismissible fade-show" role="alert">
                        {{ session('LoginError') }}
                        <button type="button" class="bt-close" data-bs-dismiss='alert' aria-label="close"></button>
                    </div>
                @endif

                <div class="card-text p-2">
                    <form action="{{ route('login_admin_action') }}" method="POST" width="100">
                        @csrf
                        <div class="mb-2">
                            <label for="username_admin" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username_admin') is invalid @enderror"
                                id="username_admin" name="username_admin">
                        </div>

                        @error('username_admin')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="mb-3">
                            <label for="password_admin" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password_admin') is invalid @enderror"
                                id="password_admin" name="password_admin">
                        </div>

                        @error('password_admin')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>
