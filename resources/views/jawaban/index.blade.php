@extends('adminlte.master')

@section('content')

 <div class="container">
   <h1> { pertanyaan_id }</h1>
   <form  method="POST" action="/jawaban/{pertanyaan_id}">
        @csrf
        <div class="form-group">
            <label for="judul">Jawab:</label>
            <input type="text" name="isi" class="form-control" id="judul">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
 </div>
@endsection