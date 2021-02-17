<!-- untuk memberitahu halaman ini bahwa halaman ini memanggil base layout dari "layou/main"
value argument relative terhadap folder view -->
<!-- / bisa diganti dengan titik -->
@extends('layout.main')

<!-- jika isi section hanya sebaris -->
@section('title', 'Form Tambah Data Mahasiswa')

<!-- jika isi section lebih dari sebaris -->
@section('container')
<!-- ini akan disisipkan kedalam layout -->
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Form Tambah Data Mahasiswa</h1>

            <!-- muncul ketika form error . opsi menampilkan error validasi
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif -->



            <!-- action akan dilakukan ke method create karena method route::post -->
            <form method="post" action="/students">
                <!-- Cross-site request forgery (also known as CSRF) is a web security vulnerability that allows an attacker to induce users to perform actions that they do not intend to perform. It allows an attacker to partly circumvent the same origin policy, which is designed to prevent different websites from interfering with each other. -->
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}">
                    @error('nama')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="nrp" class="form-label">NRP</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" value="{{old('nrp')}}">
                    @error('nrp')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
                    @error('email')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{old('jurusan')}}">
                    @error('jurusan')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection