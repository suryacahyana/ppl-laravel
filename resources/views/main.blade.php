@extends('app')
  
@section('content')
    <div class="container">
        <form id = "kuadratform">
           <div class="mb-3">
                <label for="num" class="form-label">Masukan Angka</label>
                <input name="num" type="number" value="num" class="form-control" id="num" aria-describedby="num">
            </div>    
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" onclick="apiaction()">Kalkulasi Api</button>
                <button type="submit" class="btn btn-primary" onclick="sqlaction()">Kalkulasi SQL</button>
            </div>
        </form>
        <label for="hasil" class="form-label">Hasil Kuadrat</label>
        <div class="container">
            <ul>0</ul>
        </div>
    </div>

    <div class="container">
        <table id="log" class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Angka</th>
                    <th>Hasil</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kuadrat as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->angka }}</td>
                    <td>{{ $data->hasil }}</td>
                    <td>{{ $data->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">{{ $kuadrat->links() }}</div>
    </div>
    
@endsection
 
@section('script')
 <script>
    function apiaction(){
        var action_src = "http://127.0.0.1:8000/api/akar-kuadrat/" + document.getElementsByName("num")[0].value;
        fetch(action_src)
        .then(res => {
                return res.json();
        })
        .then(data => { 
            document.querySelector('ul').innerHTML = `${data.result}`;
        });
        event.preventDefault();
    }

    function sqlaction(){
        var action_src = "http://127.0.0.1:8000/sql-kuadrat/" + document.getElementsByName("num")[0].value;
        fetch(action_src)
        .then(res => {
                 return res.json();
         })
        .then(data => { 
            document.querySelector('ul').innerHTML = `${data.result}`;
        });
        event.preventDefault();
    }
</script>
 @endsection
