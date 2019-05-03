<?php
$aksi = "modul/mod_jenis_motor/aksi_jenis_motor.php";

$query = mysql_query("select * from absensi inner join siswa on absensi.id_s = siswa.id_s inner join ortu on ortu.id_ortu = siswa.id_ortu");
$hasil = mysql_num_rows($query);
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php?modul=home">Beranda</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="index.php?modul=stok">Absensi Siswa</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Absensi Siswa</h2>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th style="width: 10%;">
                            No.
                        </th>
                        <th style="width: 15%;">
                            Nama Siswa
                        </th>
                        <th style="width: 15%;">
                            Tanggal
                        </th>
                        <th style="width: 15%;">
                            Jam Masuk
                        </th>
                        <th style="width: 20%;">
                            Jam Keluar
                        </th>
                        <th style="width: 20%;">
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
                            <td><?php echo $data['nama_s']; ?></td>
                            <td><?php echo $data['tanggal']; ?></td>
                            <td><?php echo $data['jam_masuk']; ?></td>
                            <td><?php echo $data['jam_keluar']; ?></td>
                            <td><?php echo $data['nama_ortu']; ?></td>
                            <!-- <td>
                                <a href="index.php?modul=detail_stok&id=<?php echo $data['id_jenis_motor'];?>" class="btn btn-success">Lihat Detail</a>
                            </td> -->
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div> <!-- .widget-content -->

</div>
