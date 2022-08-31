<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket</title>
</head>
<body>
    <h2 align="center">Tiket</h2>
    <center>
    <table border ="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach($tiket as $u => $i)
        <tbody>
            <tr>
                <th>{{$u+1}}</th>
                <th>{{$i->username}}</th>
                <th>{{$i->kategori}}</th>
                <th>{{$i->tanggal}}</th>
                <th>{{$i->message}}</th>
                <th><a href="/tiket/edit/{{$i->id}}">Edit</a>
                    <a href="/tiket/destroy/{{$i->id}}">Hapus</a></th>
                    
            </tr>
        </tbody>
        @endforeach
    </table>
    <a href="/tiket/create">Tambah Data</a>
</body>
</html>