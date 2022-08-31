
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
</head>
<body>
    <h2 align="center">List Kategori</h2>
    <center>
    <table border ="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach($kategori as $u => $i)
        <tbody>
            <tr>
                <th>{{$u+1}}</th>
                <th>{{$i->kategori}}</th>
                <th><a href="/kategori/edit/{{$i->id}}">Edit</a>
            </tr>
        </tbody>
        @endforeach
    </table>
    <a href="/kategori/create">Tambah Kategori</a>
</body>
</html>