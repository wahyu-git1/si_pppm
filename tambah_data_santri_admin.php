<?php
include("koneksi.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_santri = $_POST['id_santri'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO santri (id_santri, nama, id_kelas, jenis_kelamin, umur, alamat) VALUES ('$id_santri', '$nama', '$id_kelas', '$jenis_kelamin', '$umur','$alamat')";
    
    if (mysqli_query($koneksi, $sql)) {
        header("location: data_santri_admin.php?pesan=input");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Tambah User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Form Tambah Data Santri</h1>
        <form action="" method="POST">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <label for="id_santri" class="form-label">ID Santri:</label>
                    <input type="text" name="id_santri" class="form-control mb-3" >

                    <label for="nama" class="form-label">Nama :</label>
                    <input type="text" name="nama" class="form-control mb-3" >

                    <label for="id_kelas" class="form-label">ID Kelas:</label>
                    <input type="text" name="id_kelas" class="form-control mb-3" >

                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                    <select name="jenis_kelamin" class="form-select mb-3" >
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>

                    <label for="umur" class="form-label">Umur :</label>
                    <input type="text" name="umur" class="form-control mb-3" >

                    <label for="hp" class="form-label">Alamat :</label>
                    <input type="text" name="alamat" class="form-control mb-3" >


                    <button type="submit" class="btn btn-success">Tambah User</button>
                    <a href="data_santri_admin.php"><button class="btn btn-danger">Batal</button></a>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
