<?php
$servername = "localhost";
$username = "root";
$password = "";

// buat koneksi
$conn = mysqli_connect($servername, $username, $password);

// cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// buat database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
