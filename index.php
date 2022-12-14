<?php 
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Table Database Mahasiswa</h2>
        <a href="form.php">
            <button type="button" class="btn btn-success">Tambah</button>
        </a>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>ID MHS</th>
                    <th>NAMA MHS</th>
                    <th>PRODI MHS</th>
                    <th>ALAMAT MHS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>

                <?php
            while($baris=mysqli_fetch_assoc($hasil)){
                ?>
                <tr?>
                    <td><?php echo $baris['id_mhs'];?></td>
                    <td><?php echo $baris['nama_mhs'];?></td>
                    <td><?php echo $baris['nama_prodi']; ?></td>
                    <td><?php echo $baris['alamat_mhs']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $baris['id_mhs'];?>">
                            <button type="button" class="btn btn-success">Ubah</button>
                        </a>

                        <a href="delet.php?id=<?php echo $baris['id_mhs'];?>">
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </a>

                    </td>
                    </tr>


                    <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>