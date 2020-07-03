@extends('adminlte.master')

@section('content')
  <div class="card ml-3 mt-3" style="width: 18rem;">
  <div class="card-header bg-primary h3">
    Show Detail
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> <strong>Judul: </strong>{{ $pertanyaan->judul}}</li>
    <li class="list-group-item"><strong>Isi:</strong> {{ $pertanyaan->isi }}</li>
    <li class="list-group-item"><strong>Tanggal dibuat:</strong> {{ $pertanyaan->created_at }}</li>
    <li class="list-group-item"><strong>Tanggal diperbaharui: </strong>{{ $pertanyaan->updated_at }}</li>
    <li class="list-group-item"><strong>Daftar Jawaban:</strong> </li>
  </ul>
</div>
@endsection