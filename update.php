<?php 
include 'koneksi.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_mhs
            WHERE id_mhs = $id";
    $hasil = mysqli_query($koneksi, $sql);
    $result = mysqli_fetch_assoc($hasil);

    // echo $result['nama_mhs'];
}

if(isset($_POST['nama_mhs'])){
    $namaUpdate = $_POST['nama_mhs'];
    $alamatUpdate = $_POST['alamat_mhs'];
    $prodiUpdate = $_POST['Prodi_Update'];
    $sqlUpdate = "UPDATE tbl_mhs
                    SET nama_mhs = '$namaUpdate', alamat_mhs = '$alamatUpdate', id_prodi = '$prodiUpdate'
                    WHERE id_mhs = $id";   
    mysqli_query($koneksi, $sqlUpdate);
    header("Refresh:0, url=index.php");
};


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <h2>UPDATE DATA MAHASISWA</h2>
        <form method="POST" action="">
            <div class="mb-3  mt-3">
                <input type="text" class="form-control" id="nama" placeholder="Nama Mahasiswa" name="nama_mhs"
                    value="<?php echo $result['nama_mhs']?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat_mhs"
                    value="<?php echo $result['alamat_mhs']?>">
            </div>

            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="Prodi_Update">
                    <option>Open this select menu</option>
                    <?php if($result['id_prodi'] == 1) {
            echo "<option value='1' selected>Teknik Informatika</option>";
            echo "<option value='2'>Sistem Informasi</option>";
            echo "<option value='3'>Teknik Industri</option>";
            echo "<option value='4'>Sastra Inggris</option>";
            echo "<option value='5'>Kelautan</option>";
        }elseif ($result['id_prodi'] == 2) {
            echo "<option value='1' >Teknik Informatika</option>";
            echo "<option value='2'selected>Sistem Informasi</option>";
            echo "<option value='3'>Teknik Industri</option>";
            echo "<option value='4'>Sastra Inggris</option>";
            echo "<option value='5'>Kelautan</option>";
        }
        elseif ($result['id_prodi'] == 3) {
            echo "<option value='1' >Teknik Informatika</option>";
            echo "<option value='2'>Sistem Informasi</option>";
            echo "<option value='3'selected>Teknik Industri</option>";
            echo "<option value='4'>Sastra Inggris</option>";
            echo "<option value='5'>Kelautan</option>";
        }
        elseif ($result['id_prodi'] == 4) {
            echo "<option value='1' >Teknik Informatika</option>";
            echo "<option value='2'>Sistem Informasi</option>";
            echo "<option value='3'>Teknik Industri</option>";
            echo "<option value='4'selected>Sastra Inggris</option>";
            echo "<option value='5'>Kelautan</option>";
        }

        elseif ($result['id_prodi'] == 5) {
            echo "<option value='1' >Teknik Informatika</option>";
            echo "<option value='2'>Sistem Informasi</option>";
            echo "<option value='3'>Teknik Industri</option>";
            echo "<option value='4'>Sastra Inggris</option>";
            echo "<option value='5'selected>Kelautan</option>";
        }
        ?>
                </select>
            </div>
            <button type=" submit" class="btn btn-primary">Submit</button>
    </div>

    </form>
    </div>

</body>

</html>