<?php 

require_once 'config/koneksi.php'; 

$id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Ubah Produk</title>
    </head>
    <body>
        <div class="container">
            <h3 class="mt-2 mb-3">Ubah Produkk</h3>
            <div class="row">
                <div class="col-5">
                    <form action="ubah-proses.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" class="form-control" id="merk" name="merk" value="<?php echo $row['merk']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $row['stok']; ?>">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Simpan</button>
                            <a href="index.php" class="btn btn-outline-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.5.1.slim.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>