<?php 
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
require "koneksi.php";

// Get data from the database based on id_guru
$id_guru = $_SESSION['id_guru'];
$data_query = "SELECT * FROM guru WHERE id_guru = $id_guru";

// Perform the query
$result = mysqli_query($koneksi, $data_query);

// Check for query success
if (!$result) {
    die("Query failed: " . mysqli_error($koneksi));
}

// Fetch the data as an associative array
$row = mysqli_fetch_assoc($result);


// Close the database connection
mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Santri</title>
</head>
<body>
    <h1>Halaman Santri</h1>

    <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b></p>
	
    <!-- Display the fetched data -->
    <pre><?php print_r($row); ?></pre>

    <a href="logout.php">LOGOUT</a>

    <br/>
    <br/>
</body>
</html>
