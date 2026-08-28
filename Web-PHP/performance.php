<?php
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM performance ORDER BY id ASC");

$data = [];

while($row = mysqli_fetch_assoc($query)){
    $data[] = [
        "nama" => $row['nama'],
        "nilai" => (int)$row['nilai']
    ];
}

header('Content-Type: application/json');
echo json_encode($data);
?>