<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "20242014_3a2"
);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>