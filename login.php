<?php 
session_start();
require_once('aset/core/init.php');

if(isset($_SESSION['nim'])) {
header('location:index.php'); }

?>

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
		<div class="container">
		<?php require_once('aset/template/logo.php'); ?>
		<hr>
		<h1><span class="glyphicon glyphicon-log-in"></span> Login</h1>
			<form role="form" action="plogin.php" method="post">
				<div class="form-group">
	      			<label for="nim">NIM</label>
	      			<input type="text" class="form-control" placeholder="nim" name="nim" required>
	    		</div>
	    		<div class="form-group">
	      			<label for="password">Password</label>
	      			<input type="password" class="form-control" placeholder="password" name="password" required>
	    		</div>
	    		<button type="submit" name="login" class="btn btn-success btn-md">Login</button>
	    		<button type="reset" class="btn btn-primary btn-md">Reset</button>
	    		<h3>Belum Punya Akun? <a href="daftar.php"><b>Daftar</b></a></h3>
			</form>
		</div>
</body>
</html>
<?php 
	require_once('aset/template/footer.php');
?>