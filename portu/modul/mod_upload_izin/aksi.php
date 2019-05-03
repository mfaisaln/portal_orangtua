
		<?php
		session_start();
		if (empty($_SESSION['id_pengguna']) AND empty($_SESSION['passuser'])) {
			echo "<center>Untuk mengakses modul, Anda harus login <br>";
			echo "<a href=../../index.php><b>LOGIN</b></a></center>";
		} else { 
			include "../../fungsi/koneksi.php";
			if($_POST['upload']){
				$ekstensi_diperbolehkan	= array('pdf','docx');
				$nama = $_FILES['file']['name'];
				$x = explode('.', $nama);
				$ekstensi = strtolower(end($x));
				$ukuran	= $_FILES['file']['size'];
				$file_tmp = $_FILES['file']['tmp_name'];
				$id = $_SESSION['id_or'];	
				echo $id;
				
				if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
					if($ukuran < 1044070){			
						move_uploaded_file($file_tmp, 'file/'.$nama);
						$query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama','$id')");
						if($query){
							header('location:../../index.php?modul=upload' . '&pesan=tambah');
						}else{
							header('location:../../index.php?modul=upload' . '&pesan=error');
						}
					}else{
						header('location:../../index.php?modul=upload' . '&pesan=error');
					}
				}else{
					header('location:../../index.php?modul=upload' . '&pesan=error');
				}
			}
		}
		?>
