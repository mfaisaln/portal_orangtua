<?php
$aksi = "modul/mod_ngadu_guru/aksi_pengaduan_guru.php";
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Beranda</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="index.php?modul=pengaduan_guru">Pengaduan ke guru</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Tambah Pengaduan ke guru</h2>
        </div>
        <div class="box-content">
            <form id="formtest" class="form-horizontal" action="<?php echo $aksi; ?>?modul=ngadu&act=tambah" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">Pengaduan ke guru</label>
                        <div class="controls">
                            <!-- <input type="text" name="pengaduan" class="form-field"> -->
                            <textarea class="form-control" name="ngadu" rows="5"  id="comment"></textarea>
                            <span></span>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button id="reset" class="btn btn-warning">Reset</button>
                        <button class="btn btn-warning" onClick="javascript:history.back()">Batal</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div><!--/span-->

</div><!--/row-->