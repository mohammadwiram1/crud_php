<?php 

require_once 'config/koneksi.php';

$id = $_POST['id'];
$nama = strtoupper($_POST['nama']);
$merk = strtoupper($_POST['merk']);
$stok = $_POST['stok'];

$sql = "UPDATE produk SET nama = '$nama', 
                          merk = '$merk', 
                          stok = '$stok' 
                      WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header('location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>