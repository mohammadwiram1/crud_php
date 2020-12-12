<?php 

require_once 'config/koneksi.php';

$nama = strtoupper($_POST['nama']);
$merk = strtoupper($_POST['merk']);
$stok = $_POST['stok'];

$sql = "INSERT INTO produk (nama, stok, merk)
                    VALUES ('$nama', '$stok', '$merk')";

if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header('location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>