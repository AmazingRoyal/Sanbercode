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
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col" style="width: 20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pertanyaan as  $data)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$data->judul}}</td>
                            <td>{{$data->isi}}</td>
                            <td>
                                <a href="/jawaban/{{$data->id}}" class="btn btn-info">Show</a>
                                <a href="/pertanyaan/{{$data->id}}/edit" class="btn btn-secondary">Edit</a>
                                <form action="/pertanyaan/{{$data->id}}" method='POST' style='display: inline'>
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' class="btn btn-danger"><i class='fas fa-trash'></i></button>
                                </form>
                            </td>
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