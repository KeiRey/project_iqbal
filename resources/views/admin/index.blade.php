<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h2 align="center"></h2>
    <center>
    <table border ="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>Email</th>
                <th>No Telp</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach($admin as $u => $i)
        <tbody>
            <tr>
                <th>{{$u+1}}</th>
                <th>{{$i->nama_lengkap}}</th>
                <th>{{$i->username}}</th>
                <th>{{$i->email}}</th>
                <th>{{$i->telp}}</th>
                <th><a href="/admin/edit/{{$i->id}}">Edit</a>
                    <a href="/admin/destroy/{{$i->id}}">Hapus</a></th>
            </tr>
        </tbody>
        @endforeach
    </table>
    <a href="/admin/create">Tambah Data</a>
</body>
</html>