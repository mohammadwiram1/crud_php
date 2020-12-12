<?php require_once 'config/koneksi.php' ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Daftar Produk</title>
    </head>
    <body>
        <div class="container">
            <h3 class="mt-2 mb-3">Daftar Produk</h3>
            <a href="tambah.php" class="btn btn-primary mb-4">Tambah</a>
            <div class="row">
                <div class="col-7">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Merk</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 0;
                                $sql = "SELECT * FROM produk";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) { $no++; ?>
                            <tr>
                                <td><?php echo $no;?></td>
                                <td><?php echo $row["nama"]; ?></td>
                                <td><?php echo $row["merk"]; ?></td>
                                <td><?php echo $row["stok"]; ?></td>
                                <td>
                                    <a href="ubah.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-success btn-sm">Ubah</a>
                                    <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            <?php } } else { ?>
                            <tr>
                                <td colspan="4">Data Kosong</td>
                            </tr>
                            <?php    } $conn->close();?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.5.1.slim.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>