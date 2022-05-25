@extends('user.layouts.main')

@section('container')
    <div class="hero-bg-user">
        <div class="global-container" style="">
            <div class="card login-form col-md-6 no-gutters p-5"
                style="border-radius: 30px;background-color: rgb(255, 255, 255, 0.8);">
                <div class="card-body">
                    <center>
                        <img src="img/logo.png" width="120">
                    </center>
                    <h1 class="card-title text-center" style="font-weight: bold;">
                        Login
                    </h1>
                    <div class="card-text p-2">
                        <form width="100">
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Masuk</button>
                            </div>
                            <center class="mt-2">
                                <a class="me-3" href="/register">Daftar</a>
                                <a class="text-center" href="/">Kembali</a>
                            </center>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
