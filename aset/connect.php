<?php 
	$host = "us-cdbr-azure-northcentral-a.cleardb.com";
	$user = "b10d2143076fa9";
	$pass = "83353f7f";
	$db   = "ilecturer_unsri";
	$link = mysql_connect($host, $user, $pass) or die ('Koneksi Gagal!');
	mysql_select_db($db); 
?>
