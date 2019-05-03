<?php
$aksi = "modul/mod_upload_izin/aksi.php";

?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Beranda</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="index.php?modul=pengaduan_guru">Pengaduan ke guru</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Upload Surat izin</h2>
        </div>
        <div class="box-content">
            <form action="modul/mod_upload_izin/aksi.php" method="post" enctype="multipart/form-data">
				<input type="file" name="file">
				<input class="btn btn-primary" type="submit" name="upload" value="Upload">
			</form>

        </div>
    </div><!--/span-->

</div><!--/row-->