<?php 
	if(isset($_POST['login'])){
		session_start();
		require_once('aset/core/init.php');

		$nim = $_POST['nim'];
		$pass = $_POST['password'];

		$q = mysql_query("SELECT * FROM login WHERE nim = '$nim'") or die(mysql_error());
		$j = mysql_num_rows($q);
		$h = mysql_fetch_array($q);

		if($j == 0){
			echo '<center><h1>Anda Belum Daftar! silakan <a href="daftar.php">Daftar</a></h1></center>';
		}
		else{
			if($pass != $h['password']) {
				echo '<center><h1>Password Salah! <a href="login.php">Login ulang</a></h1></center>';
			}
			else {
				$_SESSION['nim'] = $h['nim'];
				header('location:index.php');
			}
		}
	}
	else{
		//redirect halaman
		echo '<script>window.history.back()</script>';
	}

	require_once('aset/template/footer.php');
?>