<?php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $level = $_POST['level']; // Mengambil level dari formulir

    $query = "INSERT INTO user (nama, username, password, level) VALUES ( ?, ?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param( $nama, $username, $password, $level);

if ($stmt->execute()) {
    echo "Sign up berhasil!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();

    
}

?>
