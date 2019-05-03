<?php
$aksi = "modul/mod_pengumuman/aksi_pengumuman.php";

$query = mysql_query("select * from pengumuman order by id_p desc");
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
            <div class="box-icon">
                <a class="btn btn-success" href="index.php?modul=tambah_pengumuman"><i class="icon-plus icon-white"></i> Tambah</a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th style="width: 5%;">
                            No.
                        </th>
                        <th style="width: 20%;">
                            Judul
                        </th>
                        <th style="width: 60%;">
                            Konten
                        </th>
                        <th style="width: 20%;">
                            Action
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
                            <td><?php echo $data['subjek']; ?></td>
                            <td><?php echo $data['desktipsi']; ?></td>
                            <td>
                                <a href="<?php echo $aksi . '?modul=pengumuman&&act=hapus&&id=' . $data['id_p']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan menghapus data?')"><i class="icon-trash icon-white"></i>Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div> <!-- .widget-content -->

</div>

