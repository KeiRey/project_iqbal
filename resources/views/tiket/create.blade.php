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
        <h2>Buat Tiket</h2>
    <form action="/tiket/store" method="post">
        @csrf
        <table>
        <tr>
           <td>Username</td>
           <td>: <input type="text" name="username"></td>
        </tr>
        <tr>
            <td> Kategori </td>
            <td>: <input type="text" name="kategori"></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>: <input type="date" name="tanggal"></td>
        </tr>
        <tr>
            <td>Message</td>
            <td> : <input type="textarea" name="message"></td>
        </tr>
</table>
<br>
    
            <button type="submit">kirim</button>
    
    </form>
</center>
</body>
</html>