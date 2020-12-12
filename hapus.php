<?php 

require_once 'config/koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM produk WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header('location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>