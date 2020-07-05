@extends('master')

@section('content')
    @foreach($mahasiswa as $mhs)
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">{{$mhs->nama}}</h4>
            <p class="card-text">{{$mhs->nim}}</p>
            <p class="card-text">{{$mhs->jurusan}}</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
    </div>
    @endforeach
@endsection