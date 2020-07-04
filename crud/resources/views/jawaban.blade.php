@extends('master')

@section('content')
    <div class="card ml-3 mr-3">
        <div class="card-header">
          <h3 class="card-title">Jawaban</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="width: 5%">#</th>
                        <th scope="col">Isi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jawaban as $data)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$data->isi}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card ml-3 mr-3 mt-5">
        <div class="card-header">
          <h3 class="card-title">Berikan Jawaban</h3>
        </div>
        <div class="card-body">
            <form action='/jawaban/{{$id}}' method='POST'>
                @csrf
                    <div class="form-group">
                        <label for="InputPertanyaInputJudulan">Jawaban</label>
                        <input type="text" class="form-control" id="InputJudul" name="InputIsi">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection