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
        <h2>Buat Kategori</h2>
    <form action="/kategori/store" method="post">
        @csrf
        <table>
        <tr>
           <td> Kategori </td>
           <td> : <input type="text" name="kategori"></td>
        </tr>
</table>
<br>
            <button type="submit">save</button>
        </form>
    </center>
</body>
</html>