    <!-- <?php 
        include "../../fungsi/koneksi.php";
    ?>
    <h3>Membuat Script Download File Dengan PHP MySQL - Tutorial</h3>
    <b>Daftar File</b>
    <br />
    <br />
    <table border="1" cellpadding="3">
        <tr>
            <th width="30">No</th>
            <th width="180">Nama File</th>
            <th width="80">Action</th>
        </tr>
            <?php
                $no=0;
                $query = mysql_query("SELECT * FROM upload ORDER BY id_upload"); 
                while($data = mysql_fetch_array($query)){
                $no++
            ?>
        <tr>
            <td><?=$no?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><a href="download.php?filename=<?=$data['nama']?>">Download</a></td>    
        </tr>
            <?php 
            } 
            ?>
    </table> -->

<?php
$aksi = "modul/mod_merk/aksi_merk.php";

$query = mysql_query("select siswa.id_s, siswa.nama_s, ortu.nama_ortu from siswa inner join ortu on siswa.id_ortu = ortu.id_ortu");
$hasil = mysql_num_rows($query);
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php?modul=home">Beranda</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="index.php?modul=merk">Surat Izin Siswa</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Surat Izin Siswa</h2>
            <div class="box-icon">
                <!-- <a class="btn btn-success" href="index.php?modul=tambah_merk"><i class="icon-plus icon-white"></i> Tambah</a> -->
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th style="width: 10%;">
                            No.
                        </th>
                        <th style="width: 30%;">
                            Nama File
                        </th>
                        <th style="width: 30%;">
                            Nama Orang Tua
                        </th>
						<th style="width: 30%;">
                            Action
                        </th>

                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    $no=0;
					$query = mysql_query("SELECT * FROM upload inner join ortu on ortu.id_ortu=upload.id_ortu ORDER BY id_upload"); 
					while($data = mysql_fetch_array($query)){
					$no++
                    ?>
                        <tr>
							<td><?=$no?></td>
            				<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['nama_ortu']; ?></td>
							<td><a href="modul/mod_upload_izin/download.php?filename=<?=$data['nama']?>" class="btn btn-info" ></i>Download</a></td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div> <!-- .widget-content -->

</div>
