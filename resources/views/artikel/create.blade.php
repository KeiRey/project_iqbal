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
        <h2>Buat Artikel</h2>
    <form action="/artikel/store" method="post">
        @csrf
        <table>
        <tr>
            <td> Solusi </td>
            <td> : <input type="text" name="solusi"></td>
        </tr>
        <tr>
            <td> Id Tiket </td>
            <td> : <input type="text" name="tiket_id"></td>
        </tr>
        <tr>
            <td> Id Admin </td>
            <td> : <input type="text" name="admin_id"></td>
        </tr>
</table>
<br>
            <button type="submit">save</button>
        </form>
    </center>
</body>
</html>