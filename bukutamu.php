<html>

<head>
    <title>Buku Tamu</title>

    <style type="text/css">
        body {
            background-color: pink;
        }
    </style>
</head>

<body>
    <center>
        <h1>Buku Tamu</h1>
        <hr>
    </center>

    <!-- menerima input -->
    <form method="POST" action="insert.php">
        <table width="400" align="center" cellpadding="2" cellspacing="2">
            <tr>
                <td> Nama : </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td> Email : </td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td> Isi : </td>
                <td><textarea name="isi"></textarea>
            </tr>
        </table>
        <center>

            <!-- tombol untuk submit dan reset -->
            <input type="submit" name="submit" value="SUBMIT">
            <input type="reset" name="reset" value="RESET">
        </center>
    </form>
</body>

</html>