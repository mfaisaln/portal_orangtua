<?php
$aksi = "modul/mod_merk/aksi_merk.php";
$id = $_SESSION['id_or'];

$query = mysql_query("select * from matpel inner join siswa on siswa.id_s=matpel.id_s where siswa.id_ortu=$id");
$hasil = mysql_num_rows($query);
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php?modul=home">Beranda</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="index.php?modul=merk">Mata Pelajaran</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Mata Pelajaran</h2>
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
                            Nama Pelajaran
                        </th>
                        <th style="width: 20%;">
                            Nama Siswa
                        </th>
                        <th style="width: 10%;">
                            Nilai
                        </th>
                        <th style="width: 30%;">
                            Semester
                        </th>
                        <!-- <th style="width: 25%;">
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
                            <td><?php echo $data['nama_matpel']; ?></td>
                            <td><?php echo $data['nama_s']; ?></td>
                            <td><?php echo $data['nilai']; ?></td>
                            <td><?php echo "semester ". $data['sems']; ?></td>
                            <!-- <td>
                                <a href="index.php?modul=ubah_merk&&id=<?php echo $data['id_merk']; ?>" class="btn btn-info" ><i class="icon-edit icon-white"></i>Ubah</a>
                                <a href="<?php echo $aksi . '?modul=merk&&act=hapus&&id=' . $data['id_merk']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan menghapus data?')"><i class="icon-trash icon-white"></i>Hapus</a>
                            </td> -->
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div> <!-- .widget-content -->

</div>
