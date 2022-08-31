<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket</title>
</head>
<body>
    <center>
    <form action="/tiket/update/{{$tiket->id}}" method="post">
        @csrf
        @method('PUT')
        <h2> Edit Tiket </h2>
        <table>
            <tr>
                <td> Username
                <td>: 
                <input type="text" name="username" value="{{$tiket->username}}">
            </td>
        </tr>
            <tr>
                <td> Kategori
                <td> : 
                <input type="text" name="kategori" value="{{$tiket->kategori}}">
            </td>
        </tr>
            <tr>
                <td> Tanggal
                <td> :
                <input type="date" name="tanggal" value="{{$tiket->tanggal}}">
            </td>
        </tr>
            <tr>
                <td> Message
                <td> :
                <input type="text" name="message" value="{{$tiket->message}}">
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