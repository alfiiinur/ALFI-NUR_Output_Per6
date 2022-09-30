<?php
$koneksi = mysqli_connect("localhost", "root", "", "pertemuan5_paw");

$sql="SELECT m.id_mhs, m.nama_mhs, m.alamat_mhs, p.nama_prodi, p.status_prodi
FROM  tbl_mhs m, tbl_prodi p
WHERE m.id_prodi = p.id_prodi";

$hasil=mysqli_query($koneksi, $sql);

?>