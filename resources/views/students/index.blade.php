<!-- untuk memberitahu halaman ini bahwa halaman ini memanggil base layout dari "layou/main"
value argument relative terhadap folder view -->
<!-- / bisa diganti dengan titik -->
@extends('layout.main')

<!-- jika isi section hanya sebaris -->
@section('title', 'List of student')

<!-- jika isi section lebih dari sebaris -->
@section('container')
<!-- ini akan disisipkan kedalam layout -->
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>Students</h1>
            <a href="/students/create" class="btn btn-primary my-3">Tambah data mahasiswa</a>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <ul class="list-group">
                @foreach($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$student->nama}}
                    <a href="/students/{{$student->id}}" class="badge bg-info">detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection