<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active" aria-current="page" href="galery.php">Galery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
                    </li>
                </ul>
                <form class="login_btn" role="search">
                    <a href="login.php"><button type="button" class="btn btn-primary custom-btn-lg">Login</button></a>
                </form>
            </div>
        </div>
    </nav>

    <h1>Sejarah PPPM ROYAN AL MANSHURIEN</h1>
    <div class="logoAbout">
        <img src="asset/logo_pppm_rm-removebg-preview.png">
    </div>
    <div class="teks_about">
        <p>PPPM Royan Al Manshurien adalah sebuah yayasan pondok pesantren
            yang berdiri pada tahun 2015, yang mana pondok ini menampung pelajar dan mahasiswa yang berasal dari
            seluruh daerah indonesia. Pondok ini terletak di desa banyuajuh kecamatan Kamal kabupaten Bangkalan
            Madura. yang mana pondok ini menampung anak anak dari mahasiswa Universitas Trunojoyo Madura<br><br><b>Motto
                PPPM RM</b><br>[1] “Katakanlah Muhammad, inilah jalanku (agamaku), aku dan orang-orang yang mengikutiku
            mengajak
            (manusia) ke jalan Allah dengan hujjah yang nyata… ” – [ Q.S. Yusuf, ayat: 108 ];<br><br>

            [2] “Ajaklah (semua manusia) kepada jalannya Tuhanmu dengan hikmah dan pelajaran yang baik, dan bantahlah
            mereka dengan yang lebih baik…” – [ Q.S. An-Nahl, ayat 25 ].<br><br>

            [3] “Dan hendaklah ada di antara kamu sekalian segolongan yang mengajak kepada kebajikan dan menyuruh pada
            yang ma’ruf dan mencegah dari yang munkar, mereka itulah orang-orang yang beruntung” – [ Q.S. Ali Imran,
            ayat: 104 ]</p>
    </div>


    <div class="card1" style="width: 18rem;">
        <img src="asset/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
    </div>
    <div class="card2" style="width: 18rem;">
        <img src="asset/2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
    </div>
    <div class="card3" style="width: 18rem;">
        <img src="asset/3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>