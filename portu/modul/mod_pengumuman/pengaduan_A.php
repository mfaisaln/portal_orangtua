<?php
$aksi = "modul/mod_pengaduan/aksi_pengaduan.php";

$query = mysql_query("select * from pengaduan inner join ortu on ortu.id_ortu=pengaduan.id_ortu ");
$hasil = mysql_num_rows($query);
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php?modul=home">Beranda</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="index.php?modul=pengaduan">Pengumuman</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Pengumuman</h2>
            
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th style="width: 10%;">
                            No.
                        </th>
                        <th style="width: 50%;">
                            Judul
                        </th>
                        <th style="width: 20%;">
                            Konten
                        </th>
                        
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $i = 1;
                    while ($data = mysql_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['pengaduan']; ?></td>
                            <td><?php echo $data['nama_ortu']; ?></td>
                            
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div> <!-- .widget-content -->

</div>
