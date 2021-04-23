@section('content')
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <title>Socis</title>
</head>
<body>
    <div class="title">
        <h1>Informació socis</h1>
    </div>
    <div class="info">
        <table class="table">
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>cognoms</th>
            <th>Correu electronic</th>
        </tr>
        @foreach($usuaris as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->nom}}</td>
                <td>{{$row->cognoms}}</td>
                <td>{{$row->email}}</td>
            </tr>
        @endforeach
    </table>
    </div>
</body>
</html>
@endsection