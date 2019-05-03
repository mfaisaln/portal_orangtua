<!DOCTYPE html>
<html>
<head>
	<title>Simple Upload dan Download File</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<div id="container">
    	<div id="header">
    		<h1>Simple Upload dan Download File</h1>
        	<span>Dibuat oleh Pino @tutorialweb.net</span>
        </div>
 
        <div id="menu">
        	<a href="index.php">Home</a>
            <a href="upload.php">Upload</a>
            <a href="download.php" class="active">Download</a>
        </div>
 
        <div id="content">
        	<h2>Download</h2>
            <p>Silahkan download file yang sudah di Upload di website ini. Untuk men-Download Anda bisa mengklik Judul file yang di inginkan.</p>
 
            <p>
            <table class="table" width="100%" cellpadding="3" cellspacing="0">
            	<tr>
                	<th width="30">No.</th>

                    <th>Nama File</th>

                </tr>
                <?php
				include "../../fungsi/koneksi.php";
				$sql = mysql_query("SELECT * FROM upload ORDER BY id_upload DESC");
				if(mysql_num_rows($sql) > 0){
					$no = 1;
					while($data = mysql_fetch_assoc($sql)){
						echo '
						<tr bgcolor="#fff">
							<td align="center">'.$no.'</td>
							<td><a href="'.$data['file'].'">'.$data['nama'].'</a></td>
						</tr>
						';
						$no++;
					}
				}else{
					echo '
					<tr bgcolor="#fff">
						<td align="center" colspan="4" align="center">Tidak ada data!</td>
					</tr>
					';
				}
				?>
            </table>
            </p>
        </div>
    </div>
 
</body>
</html>