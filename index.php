<?php 
	session_start();
	require_once('aset/core/init.php');

	if(!isset($_SESSION['nim'])) {
		header('location:login.php');
	}
	else{ 					
							
			$nim = $_SESSION['nim'];
							
			$q = mysql_query("SELECT * FROM biodata WHERE nim = '$nim'") or die(mysql_error());
							
				if(mysql_num_rows($q) == 0){
								
					echo '<center><h1>Biodata Anda Belum Diisi! <a href="biodata.php">Isi Biodata</a></h1></center>';	
				}
				else{ ?>

					  <div class="container">
					  <?php require_once('aset/template/logo.php'); ?>
					  <hr>         
					  <table class="table">
					    <thead>
					      <tr>
					        <th>Foto</th>
					        <th>NIM</th>
					        <th>Nama Lengkap</th>
					        <th>Jurusan</th>
					        <th>Aksi</th>
					      </tr>
					    </thead>
					    <tbody>
					    <?php while($data = mysql_fetch_assoc($q)){ ?>
					      <tr>
					        <td><img src='https://akademik.unsri.ac.id/images/foto_mhs/20<?= $data['nim'][7].$data['nim'][8]?>/<?php echo $data['nim'].".jpg";?>' class="img-rounded" alt='<?= 'tidak ada koneksi'?>' width='80px'/></td>
					        <td><?= $data['nim']; ?></td>
					        <td><?= $data['nama']; ?></td>
					        <td><?= $data['jurusan']; ?></td>
					        <td>
					        
					        	<a href="edit.php" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit</a>
					        	<a href="logout.php" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
					        </td>
					      </tr>
					     <?php } ?>
					    </tbody>
					  </table>

					  <?php
					  
					  		$nilai = mysql_query("SELECT * FROM nilai WHERE nim = '$nim'") or die(mysql_error());

					  		if (mysql_num_rows($nilai) == 0) {
					  			echo "<center><h1>----------Nilai Anda Belum Diisi----------</h1></center>";
					  		}
					  		else{
						  		while($data = mysql_fetch_assoc($nilai)){ ?>
						      		<tr>
						        		<td><?= $data['nilai']; ?></td>
						        		<td><?= $data['ket']; ?></td>
						      		</tr>
						     	<?php }
					 		} 
					?>						  
					</div>
<?php require_once('aset/template/footer.php'); ?>
					
			<?php	}	
	}
?>