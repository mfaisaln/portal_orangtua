<?php
$aksi = "modul/mod_jenis_motor/aksi_jenis_motor.php";
$id = $_SESSION['id_or'];
$query = mysql_query("select * from siswa inner join ortu on ortu.id_ortu=siswa.id_ortu inner join kelas on siswa.id_s=kelas.id_s where ortu.id_ortu=$id; ");
$hasil = mysql_num_rows($query);
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php?modul=home">Beranda</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="index.php?modul=stok">Kelas</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Kelas</h2>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th style="width: 10%;">
                            No.
                        </th>
                        <th style="width: 20%;">
                            Kelas
                        </th>
                        <th style="width: 20%;">
                            Nama Siswa
                        </th>
                        <!-- <th style="width: 20%;">
                            No Telepon
                        </th> -->
                        <th style="width: 20%;">
                           Nama Wali Kelas
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
                            <td><?php echo $data['nama_kelas']; ?></td>
                            <td><?php echo $data['nama_s']; ?></td>
                            <!-- <td><?php echo "+62 ". $data['tlp']; ?></td> -->

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
