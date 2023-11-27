<?php 
session_start();

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
	header("location:login.php?pesan=gagal");
}


include ('jadwal.php');

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
                        <a class="nav-link active" aria-current="page" href="pageSantri2.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Jadwal
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach ($schedules as $key => $schedule): ?>
                            <li><a class="dropdown-item"
                                    href="jadwalkelas.php?jadwal=<?php echo $key; ?>"><?php echo $schedule['nama_kelas']; ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="nilai.php">Nilai</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active" aria-current="page" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
        </div>
        </div>
    </nav>


    <!-- Konten Utama -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Tentang Pondok Pesantren Pelajar dan Mahasiswa</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam gravida, nisl a euismod sodales,
                    justo orci tincidunt leo, eu posuere sem lectus et justo.</p>
            </div>
            <div class="col-md-4">
                <h2>Kegiatan Terbaru</h2>
                <div class="card">
                    <img class="card-img-top" src="asset/1.jpg" alt="Kegiatan 1">
                    <div class="card-body">
                        <h5 class="card-title">Kajian Rutin Setiap Minggu</h5>
                        <p class="card-text">Ikuti kajian rutin setiap minggu untuk mendapatkan pengetahuan agama yang
                            lebih dalam.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="asset/2.jpg" alt="Kegiatan 2">
                    <div class="card-body">
                        <h5 class="card-title">Pengajian Malam Jumat</h5>
                        <p class="card-text">Saksikan pengajian malam Jumat untuk meningkatkan keimanan dan ketakwaan.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="asset/3.jpg" alt="Kegiatan 3">
                    <div class="card-body">
                        <h5 class="card-title">Acara Khusus: Seminar Pendidikan Islam</h5>
                        <p class="card-text">Bergabunglah dalam acara seminar pendidikan Islam untuk mendapatkan wawasan
                            baru.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Pondok Pesantren Al-Hikmah. All Rights Reserved.</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>