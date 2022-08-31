<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <center>
    <form action="/user/update/{{$user->id}}" method="post">
        @csrf
        @method('PUT')
        <h2></h2>
        <table>
            <tr>
                <td> Nama Lengkap
                <td>: 
                <input type="text" name="nama" value="{{$user->nama}}">
            </td>
        </tr>
            <tr>
                <td> Username
                <td> : 
                <input type="text" name="username" value="{{$user->username}}">
            </td>
        </tr>
            <tr>
                <td> Email
                <td> :
                <input type="text" name="email" value="{{$user->email}}">
            </td>
        </tr>
            <tr>
                <td> No Telp
                <td> :
                <input type="number" name="telp" value="{{$user->telp}}">
            </td>
        </tr>
        <tr>
            <td> Password
            <td> :
            <input type="password" name="password" value="{{$user->password}}">
        </td>
    </tr>
    </form>
        <center>
            <td> 
            <button type="submit">Kirim</button>
            </td>
        </center>
    </body>
</html>