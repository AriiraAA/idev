<?php 
	session_start();
	require_once('aset/core/init.php');
	if(isset($_POST['simpan'])){
//===================================================================================================
	//jika botton tambah di klik maka lanjut proses ini
	$nim		= $_POST['nim'];	
	$nilai		= $_POST['nilai'];	
	$ket		= $_POST['ket'];
//=================================================================================================
		
		$q = mysql_query("SELECT * FROM biodata WHERE nim = '$nim'") or die(mysql_error());
		$j = mysql_num_rows($q);

		if($j > 0){
			
			$simpan = mysql_query("INSERT INTO nilai(id, nim, nilai, ket) VALUES(NULL, '$nim', '$nilai','$ket')") or die(mysql_error());
					if($simpan) {
						echo '<center><h1>----------Berhasil----------</h1></center>';
					}
					else {
						echo '<center><h1>----------Gagal----------</h1></center>';
					}
		
		}
		else{
			echo '<center><h1>User belum terdaftar</h1></center>';
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		  <div class="container">
		  <?php require_once('aset/template/logo.php'); ?>
		  <hr>

				<form role="form" action="" method="post">
					<div class="form-group">
		      			<label for="nim">NIM</label>
		      			<input type="text" class="form-control" placeholder="NIM" name="nim" required>
		    		</div>
		    		<div class="form-group">
					  	<label for="nilai">Nilai</label>
					  	<input type="text" class="form-control" placeholder="Nilai" name="nilai" required>
					</div>
					<div class="form-group">
						<label for="ket">Keterangan</label>
						<textarea class="form-control" rows="5" placeholder="Keterangan" name="ket" required></textarea>
					</div>
		        
		    		<button type="submit" name="simpan" class="btn btn-success btn-md">Simpan</button>
		    		<button type="reset" class="btn btn-primary btn-md">Reset</button>
				</form>
			</div>
</body>
</html>