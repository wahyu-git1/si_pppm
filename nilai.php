<?php
include ('jadwal.php');
$koneksi = mysqli_connect("localhost", "root", "", "pppm2");

$getAllelement  = mysqli_query($koneksi, "SELECT nilai.id_santri, santri.nama, nilai.tahun_ajar, nilai.kedisiplinan, nilai.kesopanan, nilai.keaktifan, nilai.ketertiban FROM nilai
INNER JOIN santri ON nilai.id_santri = santri.id_santri");



?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
h1 {
    text-align: center;
}

.table {

    width: 95vw;
    border-collapse: collapse;
    margin: 50px auto;


}

table,
th,
td {
    border: 1px solid black;


}
</style>

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
    <h1>Nilai Hasil Belajar</h1>
    <table class="table">
        <?php   
        while ($row = mysqli_fetch_assoc($getAllelement)) {

        ?>
        <thead>
            <tr>
                <th scope="col">Id Santri</th>
                <th scope="col">Nama Santri</th>
                <th scope="col">Tahun Ajar</th>
                <th scope="col">Kedisiplinan</th>
                <th scope="col">Kesopanan</th>
                <th scope="col">Keaktifan</th>
                <th scope="col">Ketertiban</th>

            </tr>
        </thead>



        <tbody>
            <tr>
                <th scope="row"><?php echo $row['id_santri'] ?></th>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['tahun_ajar'] ?></td>
                <td><?php echo $row['kedisiplinan'] ?></td>
                <td><?php echo $row['kesopanan'] ?></td>
                <td><?php echo $row['keaktifan'] ?></td>
                <td><?php echo $row['ketertiban'] ?></td>

            </tr>
        </tbody>
        <button id="btnGeneratePDF" class="btn btn-primary">Generate PDF</button>


        <?php
            }

        ?>

    </table>


    <script>
    document.getElementById('btnGeneratePDF').addEventListener('click', function() {
        // Mengirim permintaan ke skrip PHP yang menghasilkan PDF
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'generate_pdf.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Unduh PDF setelah berhasil dihasilkan
                var blob = new Blob([xhr.response], {
                    type: 'application/pdf'
                });
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = 'nilai.pdf';
                link.click();
            }
        };
        xhr.send();
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>