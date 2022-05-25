@extends('user.layouts.main')
@section('container')
    <div class="row mt-5 p-5">
        <div class="col-md-6 bg-warning p-5" style="box-shadow: 2px 1px 14px 2px rgba(0,0,0,0.39);">
            <input type="hidden" name="id" value="{{ $item->id }}">
            <h3>{{ $item->nama_produk }}</h3>
            <h3>Rp. 60.000,00-</h3>
            <h3>Deskripsi Produk</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis totam, tempore consequatur itaque quae
                atque? Culpa vero neque cumque recusandae itaque eligendi incidunt ex ut et porro, consequatur dicta dolorum
                iure odio deleniti corporis fugiat maiores nemo voluptates minus tempore at molestiae nisi. Accusamus ullam
                aliquid neque dicta aspernatur mollitia!</p>
            <h3>Berat</h3>
            <h3>Ukuran</h3>
            <h3>Stok Produk</h3>
            <a href="/payproduk" class="btn btn-success mt-3"><i class="fa-solid fa-cash-register me-2"></i>Beli Langsung</a>
            <a href="#" class="btn btn-primary mt-3"><i class="fa-solid fa-cart-shopping me-2"></i>Tambah Keranjang</a>

        </div>
        <div class="col-md-3 d-block" style="width: 500px;">
            <img class="imgdetailproduk" style="box-shadow: 2px 1px 14px 2px rgba(0,0,0,0.39);"
                src="./storage/img/{{ $item->img_produk }}">
        </div>
    </div>
@endsection
