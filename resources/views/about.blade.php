<!-- untuk memberitahu halaman ini bahwa halaman ini memanggil base layout dari "layou/main"
value argument relative terhadap folder view -->
<!-- / bisa diganti dengan titik -->
@extends('layout.main')

<!-- jika isi section hanya sebaris -->
@section('title', 'About')

<!-- jika isi section lebih dari sebaris -->
@section('container')
<!-- ini akan disisipkan kedalam layout -->
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Hallo {{$nama}}</h1>
        </div>
    </div>
</div>
@endsection