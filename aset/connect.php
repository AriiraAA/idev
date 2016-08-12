<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "idev";
	$link = mysql_connect($host, $user, $pass) or die ('Koneksi Gagal!');
	mysql_select_db($db); 
?>