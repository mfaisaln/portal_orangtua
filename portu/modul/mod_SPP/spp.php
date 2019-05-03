<?php
$aksi = "modul/mod_jenis_motor/aksi_jenis_motor.php";
$id = $_SESSION['id_or'];

$query = mysql_query("select * from spp inner join siswa on spp.id_s = siswa.id_s inner join ortu on siswa.id_ortu = ortu.id_ortu where siswa.id_ortu= $id; ");
$hasil = mysql_num_rows($query);
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php?modul=home">Beranda</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="index.php?modul=jenis_motor">SPP</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> SPP</h2>
            <div class="box-icon">
                <!-- <a class="btn btn-success" href="index.php?modul=tambah_jenis_motor"><i class="icon-plus icon-white"></i> Tambah</a> -->
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th style="width: 5%;">
                            No.
                        </th>
                        <th style="width: 10%;">
                            Nama siswa
                        </th>
                        <th style="width: 15%;">
                            Semester
                        </th>
                        <th style="width: 15%;">
                            tanggungan
                        </th>
                        <th style="width: 15%;">
                            bayar
                        </th>
                        <th style="width: 15%;">
                            Sisa
                        </th>
                        <th style="width: 10%;">
                            Status
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
                            <td>Semester <?php echo $data['semester']; ?></td>
                            <td>Rp. <?php echo $data['tanggungan']; ?></td>
                            <td>Rp. <?php echo $data['bayar']; ?></td>
                            <td>Rp. <?php echo $data['tanggungan']-$data['bayar']; ?></td>
                            <td>

                              <?php
                                      if ($data['tanggungan']- $data['bayar']==0) {
                                        ?>
                                          <span class="label label-primary">Lunas</span>
                                        <?php
                                      }else {
                                        ?>
                                          <span class="label label-danger">Belum Lunas</span>
                                        <?php
                                      }
                               ?>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div> <!-- .widget-content -->

</div>
