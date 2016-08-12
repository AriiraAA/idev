<?php 
	session_start();
	require_once('aset/core/init.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<!-- ==================================================================================================================== -->	
	<?php
		$nim = $_SESSION['nim'];
		
		$q = mysql_query("SELECT * FROM biodata WHERE nim ='$nim'");
		
		if(mysql_num_rows($q) == 0){
			
			//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
			echo '<script>window.history.back()</script>';
			
		}else{
		
			//jika data ditemukan, maka membuat variabel $data
			$data = mysql_fetch_assoc($q);
		
		}
	?>
<!-- ==================================================================================================================== -->
	<div class="container">
	<?php require_once('aset/template/logo.php'); ?>
	<hr>
	
	<form role="form" action="pedit.php" method="post" enctype="multipart/form-data">
    		<div class="form-group">
      			<label>NIM</label>
      			<input type="text" class="form-control" value="<?php echo $data['nim']; ?>" name="nim" required>
    		</div>
    		<div class="form-group">
      			<label>Nama Lengkap</label>
      			<input type="text" class="form-control" value="<?php echo $data['nama']; ?>" name="nama" required>
    		</div>
			<div class="form-group">
				  <label for="sel1">Jurusan</label>
				  <select class="form-control" name="jurusan" required>
					    <option value="Teknik Informatika">TI</option>
						<option value="Sistem Informasi" <?php if($data['jurusan'] == 'Sistem Informasi'){ echo 'selected'; } ?>>SI</option>
						<option value="Sistem Komputer" <?php if($data['jurusan'] == 'Sistem Komputer'){ echo 'selected'; } ?>>SK</option>
						<option value="Komputerisasi Akutansi" <?php if($data['jurusan'] == 'Komputerisasi Akutansi'){ echo 'selected'; } ?>>KA</option>
                    	<option value="Manajemen Informatika" <?php if($data['jurusan'] == 'Manajemen Informatika'){ echo 'selected'; } ?>>MI</option>
                    	<option value="Teknik Kompeter" <?php if($data['jurusan'] == 'Teknik Kompeter'){ echo 'selected'; } ?>>TK</option>
				  </select>
			</div>
			
			<button type="submit" name="simpan" class="btn btn-success btn-sm">
	          <span class="glyphicon glyphicon-ok-circle"></span> Simpan
	        </button>
	        <a href="index.php" class="btn btn-success btn-sm">
	          <span class="glyphicon glyphicon-remove-circle"></span> Batal
	        </a>
	</form>
	</div>
</body>
</html>
<?php 
	require_once('aset/template/footer.php');
 ?>
	