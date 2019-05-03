<ul class="nav nav-tabs nav-stacked main-menu">
    <?php if ($_SESSION['hak_akses'] == 'ortu') { ?>
        <li class="nav-header hidden-tablet">Menu Utama</li>
            <li><a class="ajax-link" href="index.php?modul=pengumuman"><i class="icon-home"></i><span class="hidden-tablet"> Pengumuman</span></a></li>
        <li class="nav-header hidden-tablet">Informasi</li>
            <li><a class="ajax-link" href="index.php?modul=matpel"><i class="icon-tag"></i><span class="hidden-tablet"> Mata Pelajar</span></a></li>
            <li><a class="ajax-link" href="index.php?modul=spp"><i class="icon-tag"></i><span class="hidden-tablet"> SPP</span></a></li>
            <!-- <li><a class="ajax-link" href="index.php?modul=kelas"><i class="icon-list"></i><span class="hidden-tablet"> Kelas</span></a></li> -->
            <li><a class="ajax-link" href="index.php?modul=absensi"><i class="icon-tag"></i><span class="hidden-tablet"> Absensi</span></a></li>
            <!-- <li><a class="ajax-link" href="index.php?modul=spp"><i class="icon-tag"></i><span class="hidden-tablet"> Jadwal</span></a></li> -->
        

        <li class="nav-header hidden-tablet">Kelas dan Pengaduan</li>
            <li><a class="ajax-link" href="index.php?modul=ngadu"><i class="icon-list"></i><span class="hidden-tablet"> Pengaduan</span></a></li>
            <li><a class="ajax-link" href="index.php?modul=guru_A"><i class="icon-tag"></i><span class="hidden-tablet"> Kelas</span></a></li>
        <li class="nav-header hidden-tablet">Pengaduan Dan Saran</li>
            <li><a class="ajax-link" href="index.php?modul=pengaduan"><i class="icon-list"></i><span class="hidden-tablet"> Pengaduan</span></a></li>
            <li><a class="ajax-link" href="index.php?modul=saran"><i class="icon-list"></i><span class="hidden-tablet"> Saran</span></a></li>
            <!-- <li><a class="ajax-link" href="index.php?modul=pembelian"><i class="icon-list"></i><span class="hidden-tablet"> Pembelian Motor</span></a></li>
            <li><a class="ajax-link" href="index.php?modul=penjualan"><i class="icon-list"></i><span class="hidden-tablet"> Penjualan Motor</span></a></li> -->
        <li class="nav-header hidden-tablet">Surat Izin</li>
            <li><a class="ajax-link" href="modul/mod_izin/cetak_sizin.php"><i class="icon-list"></i><span class="hidden-tablet"> Surat Izin</span></a></li>
            <li><a class="ajax-link" href="index.php?modul=upload"><i class="icon-list"></i><span class="hidden-tablet"> Upload Surat izin</span></a></li>
        
    <?php } else if ($_SESSION['hak_akses'] == 'wali') { ?>
        
        <!-- <li class="nav-header hidden-tablet">Menu Utama</li>
        <li><a class="ajax-link" href="index.php?modul=home"><i class="icon-home"></i><span class="hidden-tablet"> Beranda</span></a></li> -->
        <li class="nav-header hidden-tablet">Informasi</li>
            <li><a class="ajax-link" href="index.php?modul=siswa"><i class="icon-tag"></i><span class="hidden-tablet"> Data Siswa</span></a></li>
            <li><a class="ajax-link" href="index.php?modul=adu"><i class="icon-tag"></i><span class="hidden-tablet"> Keluhan Orang Tua</span></a></li>
            <li><a class="ajax-link" href="index.php?modul=absensi_s"><i class="icon-tag"></i><span class="hidden-tablet">Absensi Siswa</span></a></li>
            <li><a class="ajax-link" href="index.php?modul=izin_w"><i class="icon-tag"></i><span class="hidden-tablet"> Surat Izin Siswa</span></a></li>

    <?php } else  { ?>
        
        <!-- <li class="nav-header hidden-tablet">Menu Utama</li>
        <li><a class="ajax-link" href="index.php?modul=home"><i class="icon-home"></i><span class="hidden-tablet"> Beranda</span></a></li> -->
        <li class="nav-header hidden-tablet">Input data</li>
        <li><a class="ajax-link" href="index.php?modul=input_pengumuman"><i class="icon-tag"></i><span class="hidden-tablet"> Input Pengumuman</span></a></li>
        <li class="nav-header hidden-tablet">Informasi</li>
        
            <li><a class="ajax-link" href="index.php?modul=siswa"><i class="icon-tag"></i><span class="hidden-tablet"> Data Siswa</span></a></li>
            <li><a class="ajax-link" href="index.php?modul=guru"><i class="icon-tag"></i><span class="hidden-tablet"> Data Kelas</span></a></li>
            <li><a class="ajax-link" href="index.php?modul=pengaduan_A"><i class="icon-tag"></i><span class="hidden-tablet"> Pengaduan Orang Tua</span></a></li>
            <li><a class="ajax-link" href="index.php?modul=saran_A"><i class="icon-tag"></i><span class="hidden-tablet">Saran Orang Tua</span></a></li>

    <?php } ?>
</ul>
