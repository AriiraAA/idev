<?php 
  session_start();
  require_once('aset/core/init.php');
  if(isset($_SESSION['nim'])) {
?>
<!-- ================================================================================================== -->
<!DOCTYPE html>
<html>
<head>

</head>
<body>

    	<div class="container">
      <?php require_once('aset/template/logo.php'); ?>
      <hr>

    		<form role="form" action="pbiodata.php" method="post">
    			<div class="form-group">
          			<label for="nim">NIM</label>
          			<input type="text" class="form-control" placeholder="NIM" name="nim" required>
        		</div>
        		<div class="form-group">
          			<label for="nama">Nama</label>
          			<input type="text" class="form-control" placeholder="nama" name="nama" required>
        		</div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" name="jurusan" required>
                    <option value="Teknik Informatika">TI</option>
                    <option value="Sistem Informasi">SI</option>
                    <option value="Sistem Komputer">SK</option>
                    <option value="Komputerisasi Akutansi">KA</option>
                    <option value="Manajemen Informatika">MI</option>
                    <option value="Teknik Kompeter">TK</option>
                </select>
            </div>
            
        		<button type="submit" name="tambah" class="btn btn-success btn-md">Daftar</button>
        		<button type="reset" class="btn btn-primary btn-md">Reset</button>
    		</form>
    	</div>
      
</body>
</html>
<?php 
  }
  else{
    //redirect halaman
    echo '<script>window.history.back()</script>';
  }
      require_once('aset/template/footer.php');
?>