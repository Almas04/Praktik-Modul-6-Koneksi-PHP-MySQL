<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// cekk koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// memasukkan data
$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('Jer', 'Jerman', '4')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
