<?php
$aksi = "modul/mod_merk/aksi_merk.php";

$query = mysql_query("select * from pengumuman inner join ortu on ortu.id_ortu=pengumuman.id_ortu order by id_p desc");
$hasil = mysql_num_rows($query);
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php?modul=home">Beranda</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="index.php?modul=merk">Pegnumuna</a>
        </li>
    </ul>
</div>
<!-- <h2 style="color:red;">Pengumuman</h2> -->
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Pengumuman</h2>
            <div class="box-icon">
                <!-- <a class="btn btn-success" href="index.php?modul=tambah_merk"><i class="icon-plus icon-white"></i> Tambah</a> -->
            </div>
        </div>
        <?php
        
        $i = 1;
        while ($data = mysql_fetch_array($query)) {
        ?>
            <div class="row-fluid sortable" style="width: 60rem; padding-left: 30px; padding-bottom:10px">
                <div class="box span12">
                    
                    <div class="box-content">
                    <div class="card" style="width: 45rem;">
                        <h2><?php echo $data['subjek']; ?></h2>
                        <div class="card-body">
                            <h4 class="card-title">Oleh: <?php echo $data['nama_ortu']; ?></h4>
                            <p style="font-size: 15px; class="card-text"><?php echo $data['desktipsi']; ?></p>
                            
                        </div>
                        </div>
                    </div>
                </div> <!-- .widget-content -->
            </div>
        <?php }?>
</div> <!-- .widget-content -->





