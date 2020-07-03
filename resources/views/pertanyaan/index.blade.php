@extends('adminlte.master')

@section('content')
    <h1 class="mb-2 ml-2 mt-2">Punya Pertanyaan ? <a href="/pertanyaan/create">Ajukan Pertanyaan</a></h1>
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Isi</th>
        <th scope="col">Tanggal di buat</th>
        <th scope="col">Tanggal di perbaharui</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pertanyaan as $key => $a)
        <tr>
            <td>{{ $key + 1}}</td>
            <td>{{ $a->judul }}</td>
            <td> <a href="/jawaban/{id}">{{ $a->isi }}</a></td>
            <td>{{ $a->created_at }}</td>
            <td>{{ $a->updated_at }}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
@endsection