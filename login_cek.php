<?php
    session_start();

	$koneksi = mysqli_connect("localhost","root","","pppm2");

	if (isset($_POST["login"])){
		$username = $_POST["username"];
		$password = $_POST["password"];


		$check_query = mysqli_query($koneksi,"SELECT * FROM `user` WHERE username = '$username' AND password = '$password'")->fetch_assoc();


		if ($check_query){
			$_SESSION["nama"] = $check_query["nama"];
			if ($check_query["level"] == "admin"){
				$_SESSION["level"] = "admin";
			header("Location:pageAdmin.php");
			}else {
				$_SESSION["level"] = "santri";
				header("Location:pageSantri2.php");
			}
		}else {
			echo "<script>alert('salahhhh');</script>";
		}	
	}