<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.photo-container {
    overflow: hidden;
    margin: 10px;
}

.photo {
    width: 200px;
    height: 150px;
    border-radius: 20px;
    transition: transform 0.3s ease-in-out;
}

.photo:hover {
    transform: scale(1.2);
    cursor: pointer;
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

    <h1>Dokumentasi Kegiatan PPPM RM</h1><br><br>

    <div class="gallery">
    <?php
    // Daftar foto
    $photos = glob("photos/*");
    
    foreach ($photos as $photo) {
        echo '<div class="photo-container">';
        echo '<img src="' . $photo . '" alt="Photo" class="photo">';
        echo '</div>';
    }
    ?>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function () {
    $(".photo").click(function () {
        $(this).toggleClass("zoomed");
    });
});

    </script>
</body>

</html>