<?php
if(isset($_POST['tambah'])){

	session_start();
	require_once('aset/core/init.php');
//===================================================================================================
	//jika botton tambah di klik maka lanjut proses ini
	$nim		= $_POST['nim'];	
	$name		= $_POST['nama'];	
	$jurusan	= $_POST['jurusan'];
//=================================================================================================
	//Validasi form
		
		$q = mysql_query("SELECT * FROM biodata WHERE nim = '$nim'") or die(mysql_error());
		$j = mysql_num_rows($q);

		if($j == 0){
			
			//menyimpan biodata ke DB
			$input = mysql_query("INSERT INTO biodata VALUES(NULL, '$nim', '$name', '$jurusan')") or die(mysql_error());

			//jika query input berhasil
				if($input){
					$_SESSION['nim'] = $nim;
					header('location:index.php');		
				}
				else{	
					echo "Biodata Anda gagal terdaftar! ";
					echo '<a href="biodata.php">Isi ulang Biodata</a>';	
				}		
		}
		else{
			echo '<center><h1>NIM Anda Sudah Terdaftar! Silakan <a href="biodata.php">Isi Ulang Biodata</a></h1></center>';
		}
}
else
{
	//redirect halaman
	echo '<script>window.history.back()</script>';
}

	require_once('aset/template/footer.php');


?>