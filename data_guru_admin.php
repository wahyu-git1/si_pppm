<?php 
session_start();

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
	header("location:index.php?pesan=gagal");
}

$koneksi =mysqli_connect("localhost", "root", "", "pppm2");

$query = "select * from guru";
$hasil = mysqli_query($koneksi, $query);

// print_r($hasil);

if(!$hasil){
    echo "koneksi berhasil";
}



?>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="asset/logo_pppm_rm-removebg-preview.png" alt="Bootstrap" width="90" height="auto">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pageAdmin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="data_santri_admin.php">Data Santri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="data_guru_admin.php">Data guru</a>
                    </li>
                </ul>
            <a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
            </div>
        </div>
    </nav>
    <h1>Dashbord Admin</h1>

    <button type="button" class="btn btn-success">Tambah Data</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama guru</th>
                <th scope="col">Umur</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
            </tr>
        </thead>
        <?php
        while ($row = mysqli_fetch_assoc($hasil)) {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_guru'] ?></td>
                <td><?php echo $row['nama'] ?> </td>
                <td><?php echo $row['umur'] ?> </td>
                <td><?php echo $row['alamat'] ?> </td>
                <td><?php echo $row['jenis_kelamin'] ?> </td>
                <td>
                    <button type="button" class="btn btn-warning">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>

                </td>
            </tr>

        </tbody>
        <?php
        }
        ?>
    </table>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>