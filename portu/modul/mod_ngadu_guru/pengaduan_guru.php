<?php
$aksi = "modul/mod_ngadu_guru/aksi_pengaduan_guru.php";
$id = $_SESSION['id_or'];
$query = mysql_query("select * from ngadu where ngadu.id_ortu=$id;");
$hasil = mysql_num_rows($query);
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php?modul=home">Beranda</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="index.php?modul=pengaduan_guru">pengaduan ke guru</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> pengaduan ke guru</h2>
            <div class="box-icon">
                <a class="btn btn-success" href="index.php?modul=tambah_pengaduan_guru"><i class="icon-plus icon-white"></i> Tambah</a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th style="width: 10%;">
                            No.
                        </th>
                        <th style="width: 70%;">
                            Pengaduan
                        </th>
                        <th style="width: 20%;">
                            Aksi
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
                            <td><?php echo $data['ngadu']; ?></td>
                            <td>
                                <a href="<?php echo $aksi . '?modul=ngadu&&act=hapus&&id=' . $data['id_ngadu']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan menghapus data?')"><i class="icon-trash icon-white"></i>Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div> <!-- .widget-content -->

</div>
