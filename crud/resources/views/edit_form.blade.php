@extends('master')

@section('content')
    <div class="card ml-3 mr-3">
        <div class="card-header">
          <h3 class="card-title">Edit Pertanyaan</h3>
        </div>
        <div class="card-body">
            <form action='/pertanyaan/{{$pertanyaan->id}}' method='POST'>
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="InputPertanyaInputJudulan">Judul</label>
                    <input type="text" class="form-control" id="InputJudul" name="InputJudul" value="{{$pertanyaan->judul}}">
                </div>
                <div class="form-group">
                    <label for="InputIsi">Isi</label>
                    <input type="text" class="form-control" id="InputIsi", name="InputIsi" value="{{$pertanyaan->isi}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection