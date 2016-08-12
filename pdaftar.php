<?php 

		require_once('aset/core/init.php');

		$nim = $_POST['nim'];
		$pass = $_POST['password'];

		$q = mysql_query("SELECT * FROM login WHERE nim = '$nim'") or die(mysql_error());
		$j = mysql_num_rows($q);

		if($j != 0) {
			echo '<center><h1>NIM Sudah Terdaftar! <a href="daftar.php">Daftar ulang</a></h1></center>';
		}
		else {
			if(!$nim && !$pass){
				echo '<center><h1>Masih ada data yang kosong! <a href="daftar.php">Registrasi ulang</a></h1></center>';
			}
			else {
				$simpan = mysql_query("INSERT INTO login (nim, password) VALUES('$nim','$pass')");
					if($simpan) {
						echo '<center><h1>Daftar Sukses, Silahkan <a href="login.php">Login</a></h1></center>';
					}
					else {
						echo "Proses Gagal!";
						echo '<a href="daftar.php">Registrasi ulang</a>';
					}				
			}
		}

	require_once('aset/template/footer.php');
?>
