<html>

<head>
    <title>Koneksi Database MySQL</title>
</head>

<body>
    <h1>Demo Koneksi database MySQL</h1>
    <?php
    $con = mysqli_connect("localhost", "root", "", "myDB");

    // cek koneksi
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySql: " . mysqli_connect_error();
        exit();
    }
    ?>
</body>

</html>