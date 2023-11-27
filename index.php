<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPPM RM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg custom-navbar">
        <!-- Add the custom class here -->
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="asset/logo_pppm_rm-removebg-preview.png" alt="Bootstrap" width="120" height="auto">
                <!-- Increase the width of the logo -->
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!-- Change me-auto to ml-auto for right alignment and add ml-3 for left margin -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                        <!-- Remove the active class for non-active items -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <form class="login_btn ml-auto" role="search" id="search" style="right: auto; left: 700px;">
                    <a href="login.php"><button type="button" class="btn btn-primary custom-btn-lg">Login</button></a>
                </form>
            </div>
        </div>
    </nav>
    <div>
        <div class="flex-item-left">
            <h1 class="title_home"><strong><strong>PPPM ROYAN AL MANSHURIEN</strong></strong></h1>
            <label class="teks_home">PPPM Royan Al Manshurien adalah sebuah yayasan pondok pesantren
                yang berdiri pada tahun 2015, yang mana pondok ini menampung pelajar dan mahasiswa yang berasal dari
                seluruh daerah indonesia. Pondok ini terletak di desa banyuajuh kecamatan Kamal kabupaten Bangkalan
                Madura. yang mana pondok ini menampung anak anak dari mahasiswa Universitas Trunojoyo Madura</label>
            <br>
            <a href="https://maps.app.goo.gl/YeJL96AHRDcbkuas8" target="_blank"
                class="btn text-decoration-none rounded btn-success mt-3 py-3">
                Cari lokasi &nbsp;<i class="bi bi-geo-alt-fill"></i>
            </a>
        </div>
        <img src="asset/8721596-removebg-preview.png" class="gbr-pageHome">

    </div>

    <div>
        <h3 class="title2">Gallery PPPM</h3>
        <div class="dokumentasi_teks">
            <h1 class="title_home2"><strong><strong>Dokumentasi kegiatan PPPM</strong></strong></h1>
            <label class="teks_home2">Beberapa contoh dokumentasi kegiatan yang ada di PPPM Royan Al Manshurien. Yang
                mana pada pondok ini terdapat banyak sekali kegiatan. Selain kegiatan pembelajaran, di pondok ini juga
                terdapat kegiatan kegiatan luar pembelajaran yang sangat menarik. Maka dari itu, para santri disini
                merasa nyaman dan betah berada di pondok pesantren ini </label>
            <br>
            <a href="galery.php" target="_blank" class="btn text-decoration-none rounded btn-success mt-3 py-3">
                Selengkapnya &nbsp;<i class="bi bi-search"></i>
            </a>
        </div>
        <img src="asset/2.jpg" class="img-fluid" alt="...">
    </div>



    <!-- footer -->
    <footer>
        @PPPM ROYAN AL MANSHURIEN
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>