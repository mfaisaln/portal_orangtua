<?php
$aksi = "modul/mod_adu/aksi_adu.php";

$query = mysql_query("select ngadu.id_ngadu, ngadu.ngadu, ortu.nama_ortu from ngadu inner join ortu on ngadu.id_ortu = ortu.id_ortu");
$hasil = mysql_num_rows($query);
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php?modul=home">Beranda</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="index.php?modul=pengaduan_guru">Keluhan orang Tua</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Keluhan Orang Tua</h2>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th style="width: 10%;">
                            No.
                        </th>
                        <th style="width: 50%;">
                            Pengaduan
                        </th>
                        <th style="width: 70%;">
                            Nama Orang Tua
                        </th>
                        <!-- <th style="width: 20%;">
                            Aksi
                        </th> -->
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
                            <td><?php echo $data['nama_ortu']; ?></td>
                            <!-- <td>
                                <a href="<?php echo $aksi . '?modul=ngadu&&act=hapus&&id=' . $data['id_ngadu']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan menghapus data?')"><i class="icon-trash icon-white"></i>Hapus</a>
                            </td> -->
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div> <!-- .widget-content -->

</div>
