<!-- untuk memberitahu halaman ini bahwa halaman ini memanggil base layout dari "layou/main"
value argument relative terhadap folder view -->
<!-- / bisa diganti dengan titik -->
@extends('layout.main')

<!-- jika isi section hanya sebaris -->
@section('title', 'Daftar Mahasiswa')

<!-- jika isi section lebih dari sebaris -->
@section('container')
<!-- ini akan disisipkan kedalam layout -->
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Daftar Mahasiswa</h1>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- foreach menggunakan blade laravel -->
                    @foreach($mahasiswa as $mhs)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$mhs->nama}}</td>
                        <td>{{$mhs->nrp}}</td>
                        <td>{{$mhs->email}}</td>
                        <td>{{$mhs->jurusan}}</td>
                        <td>
                            <a href="" class="badge bg-success">Edit</a>
                            <a href="" class="badge bg-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection