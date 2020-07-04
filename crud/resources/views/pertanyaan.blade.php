@extends('master')

@section('content')
    <div class="card ml-3 mr-3">
        <div class="card-header">
          <h3 class="card-title">Pertanyaan</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="width: 5%">#</th>
                        <th scope="col" style="width: 30%">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col" style="width:10%">Jawaban</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pertanyaan as  $data)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$data->judul}}</td>
                            <td>{{$data->isi}}</td>
                            <td><a href="/jawaban/{{$data->id}}" class="btn btn-info">Show</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
    

@endsection