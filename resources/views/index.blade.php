<!-- untuk memberitahu halaman ini bahwa halaman ini memanggil base layout dari "layou/main"
value argument relative terhadap folder view -->
@extends('layout/main')


@section('title', 'Web Programming UNPAS')


@section('container')
<!-- ini akan disisipkan kedalam layout -->
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Belajar Laravel</h1>
        </div>
    </div>
</div>
@endsection