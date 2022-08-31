<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
</head>
<body>
    <center>
    <form action="/kategori/update/{{$kategori->id}}" method="post">
        @csrf
        @method('PUT')
        <h2> Edit Kategori </h2>
        <table>
            <tr>
                <td> Nama Kategori
                <td>: 
                <input type="text" name="kategori" value="{{$kategori->kategori}}">
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