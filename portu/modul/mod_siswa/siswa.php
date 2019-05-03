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
            <a href="index.php?modul=merk">Data Siswa</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Data Siswa</h2>
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
                            Nama Siswa
                        </th>
                        <th style="width: 30%;">
                            Nama Orang Tua
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
                            <td><?php echo $data['nama_s']; ?></td>
                            <td><?php echo $data['nama_ortu']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div> <!-- .widget-content -->

</div>
