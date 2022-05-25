@extends('user.layouts.main')

@section('container')
    <div class="container-custom" style="max-width: 100%;overflow-x: hidden">
        <div class="header-custom text-center">
            <h1 style="font-weight: bold">Custom Kaos Huts Apparel</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla adipisci voluptate nobis tenetur autem
                deleniti laborum tempore consectetur fugiat velit! Adipisci commodi dolorum eius ex illo, mollitia
                aspernatur asperiores? Nisi explicabo, sit eaque dignissimos inventore totam cupiditate officiis sunt non
                iste vero? Veritatis maxime unde ducimus quam est accusamus quia.</p>
        </div>
        <div class="konten-custom">
            <div class="row mt-2">
                <div class="col-md-7 form-custom p-5" style=" border-radius:20px">
                    <h1 style="font-weight: bold">Halaman Pemesanan</h1>
                    <form>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="nama_customer">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_custom"
                                    placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nohp_customer">No Hp</label>
                                <input type="text" class="form-control" id="nohp_customer" placeholder="Masukkan No Hp">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email_customer">Email</label>
                                <input type="text" class="form-control" id="email_customer" placeholder="Enter email">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 carousel-pricelist">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/pricelist/jaket.png" class="d-block img-fluid" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/pricelist/kaos.png" class="d-block img-fluid" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
