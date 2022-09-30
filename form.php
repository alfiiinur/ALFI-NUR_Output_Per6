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
        <h2>INPUT DATA MAHASISWA</h2>
        <form method="POST" action="index.php">
            <div class="mb-3  mt-3">
                <input type="text" class="form-control" id="nama" placeholder="Nama Mahasiswa" name="nama_mhs">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat_mhs">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="Prodi">
                    <option selected>Prodi</option>
                    <option value="1">Teknik Informatika</option>
                    <option value="2">Sistem Informasi</option>
                    <option value="3">Teknik Mesin</option>
                    <option value="4">Sastra Inggris</option>
                    <option value="5">Kelatuan</option>
                </select>
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="status">
                    <option selected>Status</option>
                    <option value="1">Aktif</option>
                    <option value="2">Non Aktif</option>>
                </select>
            </div>
            <button type=" submit" class="btn btn-primary">Submit</button>
    </div>

    </form>
    </div>

</body>

</html>