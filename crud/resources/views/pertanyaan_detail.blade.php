@extends('master')

@section('content')
<div class="shadow-sm p-3 mb-5 bg-white rounded ml-3 mr-3 mb-3">
    <div class="ml-2">
    <p class="font-weight-light text-muted">Pertanyaan</p>
        <h2>{{$pertanyaan->judul}}</h2>
        <h5>{{$pertanyaan->isi}}</h5>
    </div>
    <div class="mt-5 mr-3 ml-5">
        <p class="font-weight-light text-muted">Jawaban</p>
        @foreach($jawaban as $data)
            <div class="shadow p-3 mb-3 bg-white rounded">
                <p>{{$data->isi}}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection