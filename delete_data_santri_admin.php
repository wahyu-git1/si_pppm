<?php
include("koneksi.php");

if(isset($_GET['id'])) {
    $id_santri = $_GET['id'];

    $sqldel = "DELETE FROM santri WHERE id_santri = '$id_santri'";

    if (mysqli_query($koneksi, $sqldel)) {
        header("location: data_santri_admin.php?pesan=hapus");
        exit();
    } else {
        echo "Error: " . $sqldel . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Error: ID User tidak valid.";
}
?>
