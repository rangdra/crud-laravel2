@extends('adminlte.master')

@section('content')
<div class="ml-3">
    <h3>Edit Pertanyaan</h3>
        <form  method="POST" action="/pertanyaan/{{$pertanyaan->id}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" name="judul" value="{{$pertanyaan->judul}}" class="form-control" id="judul">
            </div>
            <div class="form-group">
                <label for="isi">isi:</label>
                <input type="text" name="isi" value="{{$pertanyaan->isi}}" class="form-control" id="isi">
            </div>
            <!-- <div class="form-group">
                <label for="created">tanggal di buat:</label>
                <input type="date" name="created_at" value="{{$pertanyaan->created_at}}" class="form-control" id="created">
            </div> -->
            <div class="form-group">
                <label for="updated">tanggal di perbarui:</label>
                <input type="date"name="updated_at" value="{{$pertanyaan->updated_at}}" class="form-control" id="updated">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
@endsection