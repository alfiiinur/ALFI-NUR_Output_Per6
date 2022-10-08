<?php
include "koneksi.php";


$id = $_GET['id'];
$sqlDel = "DELETE FROM tbl_mhs 
        WHERE id_mhs = $id";
mysqli_query($koneksi, $sqlDel);
header("Refresh:0, url=index.php");

?>