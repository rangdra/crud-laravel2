@extends('adminlte.master')

@section('content')
    <div class="ml-2 mb-2">
        <h1>Larahub</h1>
        <a href="/pertanyaan/create" class="btn btn-primary">Buat Pertanyaan</a>
    </div>
    <table class="table">
    <thead class="thead-light mt">
        <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Isi</th>
        <th scope="col">Tanggal di buat</th>
        <th scope="col">Tanggal di perbaharui</th>
        <th scope="col">Jawaban</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pertanyaan as $key => $a)
        <tr>
            <td>{{ $key + 1}}</td>
            <td>{{ $a->judul }}</td>
            <td>{{ $a->isi }}</a></td>
            <td>{{ $a->created_at }}</td>
            <td>{{ $a->updated_at }}</td>
            <td><a href="/jawaban/{pertanyaan_id}">lihat jawaban</a></td>
            <td>
             <a href="/pertanyaan/{{$a->id}}" class="btn btn-sm btn-info">show</a>
             <a href="/pertanyaan/{{$a->id}}/edit" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></i></a>
             <form action="/pertanyaan/{{$a->id}}" method="post" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
             </form>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
@endsection