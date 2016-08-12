<?php
session_start();
if(isset($_POST['simpan'])){
	
	require_once('aset/core/init.php');
//============================================================================================================
	$nim		= $_POST['nim'];	
	$name		= $_POST['nama'];		
	$jurusan	= $_POST['jurusan'];
	$nim 		= $_SESSION['nim'];

		$update = mysql_query("UPDATE biodata SET nim='$nim', nama='$name', jurusan='$jurusan' WHERE nim='$nim'") or die(mysql_error());
		
		//jika query update sukses
		if($update){	
			header('location:index.php');
			
		}
		else{	
			echo 'Gagal Edit Biodata! ';
			echo '<a href="edit.php?id='.$id.'">Kembali</a>';	
		} 
}
else{	
	echo '<script>window.history.back()</script>'; 
}

require_once('aset/template/footer.php');
?>