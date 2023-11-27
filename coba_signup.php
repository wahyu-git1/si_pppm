<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Register</title>
  </head>
  <body>
    <?php
      require_once 'koneksi.php'; // Koneksi ke database

      if(isset($_SESSION['is_login']) || isset($_COOKIE['_logged'])) {
        header('location: /');
      }

      if(isset($_POST['submit'])) {
        $nama     = strip_tags($_POST['nama']);
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);
        $level    = strip_tags($_POST['level']);

        if(empty($nama) || empty($username) || empty($password) || empty($level)) {
          echo '<b>Peringatan!</b> Silahkan isi data yang diperlukan.';
        } elseif(count((array) $connect->query('SELECT username FROM user WHERE username = "'.$username.'"')->fetch_array()) > 1) {
          echo '<b>Peringatan!</b> Username telah terdaftar.';
        } else {
          $insert = $connect->query('INSERT INTO `user`(`nama`, `username`, `password`, `level`) VALUES("'.$nama.'", "'.$username.'", "'.password_hash($password, PASSWORD_BCRYPT).'", "'.$level.'")');
          if($insert) {
            echo 'Pendaftaran berhasil!';
          } else {
            echo 'Pendaftaran gagal!';
          }
        }
      }
    ?>
    <form method="POST">
      <input type="text" name="nama" value="" autocomplete="off" placeholder="Nama">
      <br/>
      <input type="text" name="username" value="" autocomplete="off" placeholder="Username">
      <br/>
      <input type="password" name="password" value="" autocomplete="off" placeholder="Kata sandi">
      <br/>
      <input type="text" name="level" value="" autocomplete="off" placeholder="Level (admin, santri, guru)">
      <br/>
      <input type="submit" name="submit" value="Register">
    </form>
  </body>
</html>
