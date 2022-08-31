<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
</head>
<body>
    <center>
    <form action="/artikel/update/{{$artikel->id}}" method="post">
        @csrf
        @method('PUT')
        <h2></h2>
        <table>
            <tr>
                <td> Solusi
                <td> : 
                <input type="text" name="solusi" value="{{$artikel->solusi}}">
            </td>
        </tr>
            <tr>
                <td> Id Tiket
                <td> :
                <input type="text" name="tiket_id" value="{{$artikel->tiket_id}}">
            </td>
        </tr>
            <tr>
                <td> Id Admin
                <td> :
                <input type="text" name="admin_id" value="{{$artikel->admin_id}}">
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