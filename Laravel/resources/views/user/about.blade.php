@extends('user.layouts.main')

@section('container')
    <div class="konten-about" style="max-width: 100%;overflow-x: hidden;">
        <div class="row p-5" style="height: 275px;margin-top: 112px; background-color: rgb(32, 63, 150)">
            <div class="isi-about col-lg-3 text-center text-light">
                <h1 class="title-about" style="font-weight: bold;">About Us</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore doloribus expedita maiores nihil impedit
                    numquam in nobis unde! Nihil facere cupiditate consequatur molestias neque molestiae totam, impedit
                    iusto sit consequuntur eligendi cum unde, commodi fugit ea alias eaque vitae. Itaque, recusandae
                    tenetur! Maiores veritatis quaerat incidunt laudantium sapiente! Fugit, natus.</p>
            </div>
        </div>
        <div class="row"
            style="height: 300px; margin-top:-30px; border-radius: 50px; background-color: rgb(255, 255, 255)">

        </div>

        {{-- <div class="isi-about" style="padding: 30px; display: flex">
            <div class="col-lg-9" style="padding: 30px; ">

            </div>
            <div class="col-lg-3">

            </div>

        </div> --}}

    </div>
    {{-- <h1>Halaman About</h1>
        <h3>{{ $name }}</h3>
        <p>{{ $email }}</p>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
    </div> --}}
@endsection
