<style>
.logo {
    position: relative;
    bottom: 660px;
    width: 13%;
    height: 25%;
    z-index: -50;
}

.alert {
    background: #e44e4e;
    color: white;
    padding: 10px;
    text-align: center;
    border: 1px solid #b32929;
    position: relative;
    top: 60px;
}
</style>
<!DOCTYPE html>
<html>

<head>
    <title>Login </title>
    <link rel="stylesheet" href="stylelogin.css">
</head>

<body>

    <h1>PONDOK PESANTREN PELAJAR DAN MAHASISWA<br /> Royan Al Manshurien</h1>

    <?php 
	if(isset($_POST['pesan'])){
		if($_POST['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

    <div class="kotak_login">
        <p class="tulisan_login">Silahkan login</p>

        <form action="login_cek.php" method="POST">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username .." required="required">

            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password .." required="required">

            <input type="submit" class="tombol_login" value="LOGIN" name="login">

            <br />
            <br />
            <center>
                <a class="link" href="coba_signup.php">Sign up</a>
            </center>
        </form>

    </div>
    <img src="asset/logo_pppm_rm-removebg-preview.png " class="logo">

</body>

</html>