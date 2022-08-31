<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
</head>
<body>
    <h2 align="center"></h2>
    <center>
    <table border ="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Solusi</th>
                <th>Id Tiket</th>
                <th>Id Admin</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach($artikel as $u => $i)
        <tbody>
            <tr>
                <th>{{$u+1}}</th>
                <th>{{$i->solusi}}</th>
                <th>{{$i->tiket_id}}</th>
                <th>{{$i->admin_id}}</th>
                <th><a href="/artikel/edit/{{$i->id}}">Edit</a>
                    <a href="/artikel/destroy/{{$i->id}}">Hapus</a></th>
            </tr>
        </tbody>
        @endforeach
    </table>
    <a href="/artikel/create">Tambah Data</a>
</body>
</html>