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
    <form action="/user/store" method="post">
        @csrf
        <table>
        <tr>
           <td> Nama Lengkap </td>
           <td> : <input type="text" name="nama"></td>
        </tr>
        <tr>
            <td> Username </td>
            <td> : <input type="text" name="username"></td>
        </tr>
        <tr>
            <td> Email </td>
            <td> : <input type="text" name="email"></td>
        </tr>
        <tr>
            <td> No Telp </td>
            <td> : <input type="number" name="telp"></td>
        </tr>
        <tr>
            <td> Password </td>
            <td> : <input type="password" name="password"></td>
        </tr>
</table>
<br>
            <button type="submit">save</button>
        </form>
    </center>
</body>
</html>