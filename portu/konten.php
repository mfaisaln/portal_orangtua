<?php
if ($_SESSION == NULL) {
    echo "<script>alert('Anda belum login, silahkan login untuk mengakses halaman administrator !.'); window.location = 'login.php'</script>";
} else {
    //NOTIFIKASI PESAN ERROR BERDASARKAN GET URL pesan
    include"fungsi/fungsi_pesan.php";
    //AKHIR NOTIFIKASI

    if ($_GET['modul'] == 'home') {
         include "modul/mod_home/home_admin.php";
     } //elseif ($_GET['modul'] == 'profil') {
    //     include "modul/mod_profil/profil_admin.php";
    // }

    // //MODUL KARYAWAN
    // elseif ($_GET['modul'] == 'petugas') {
    //     include "modul/mod_petugas/petugas.php";
    // } elseif ($_GET['modul'] == 'tambah_petugas') {
    //     include "modul/mod_petugas/tambah_petugas.php";
    // } elseif ($_GET['modul'] == 'ubah_petugas') {
    //     include "modul/mod_petugas/ubah_petugas.php";
    // } elseif ($_GET['modul'] == 'hapus_petugas') {
    //     include "modul/mod_petugas/hapus_petugas.php";
    // }
    // ==================================   ORANG TUA ========================================
    //MODUL PENGUMUMAN
    else if ($_GET['modul'] == 'pengumuman') {
        include "modul/mod_home/pengumuman.php";
    }
    //MODUL MATPEL
    else if ($_GET['modul'] == 'matpel') {
        include "modul/mod_matpel/matpel.php";
    }

    //MODUL JABTAN
    elseif ($_GET['modul'] == 'spp') {
        include "modul/mod_spp/spp.php";
    }
    //MODUL KELAS
    elseif ($_GET['modul'] == 'kelas') {
        include "modul/mod_kelas/kelas.php";
    }
    //MODUL ABSENSI
    elseif ($_GET['modul'] == 'absensi') {
        include "modul/mod_absensi/absensi.php";
    } elseif ($_GET['modul'] == 'tambah_absensi') {
        include "modul/mod_absensi/tambah_absensi.php";
    }
    //MODUL PENGADUAN GURU
    elseif ($_GET['modul'] == 'ngadu') {
        include "modul/mod_ngadu_guru/pengaduan_guru.php";
    } elseif ($_GET['modul'] == 'tambah_pengaduan_guru') {
        include "modul/mod_ngadu_guru/tambah_pengaduan_guru.php";
    }
    //MODUL GURU
    elseif ($_GET['modul'] == 'guru_A') {
        include "modul/mod_guru/guru_A.php";
    } elseif ($_GET['modul'] == 'tambah_guru') {
        include "modul/mod_guru/tambah_guru.php";
    }
    //MODUL Pengaduan
    elseif ($_GET['modul'] == 'pengaduan') {
        include "modul/mod_pengaduan/pengaduan.php";
    } elseif ($_GET['modul'] == 'tambah_pengaduan') {
        include "modul/mod_pengaduan/tambah_pengaduan.php";
    }
    //MODUL SARAN
    elseif ($_GET['modul'] == 'saran') {
        include "modul/mod_saran/saran.php";
    } elseif ($_GET['modul'] == 'tambah_saran') {
        include "modul/mod_saran/tambah_saran.php";
    }
    //MODUL IZIN
    elseif ($_GET['modul'] == 'izin') {
        include "modul/mod_down_izin/izin.php";
    }
    //MODUL UPLOAD IZIN
    elseif ($_GET['modul'] == 'upload') {
        include "modul/mod_upload_izin/upload_izin.php";
    }

    //MODUL adu
    elseif ($_GET['modul'] == 'adu') {
        include "modul/mod_adu/adu.php";
    }
    //MODUL adu
    elseif ($_GET['modul'] == 'down') {
        include "modul/mod_upload_izin/izin.php";
    }

    // ===================== WALI KELAS ==============================
    //MODUL SISWA
    elseif ($_GET['modul'] == 'siswa') {
        include "modul/mod_siswa/siswa.php";
    }
    elseif ($_GET['modul'] == 'absensi_s') {
        include "modul/mod_absensi/absensi_s.php";
    }
    elseif ($_GET['modul'] == 'izin_w') {
        include "modul/mod_upload_izin/izin.php";
    }

    // ===================== ADMIN ==============================
    //MODUL VIEW PENGADUAN
    elseif ($_GET['modul'] == 'pengaduan_A') {
        include "modul/mod_pengaduan/pengaduan_A.php";
    }
    //MODUL VIEW SARAN
    elseif ($_GET['modul'] == 'saran_A') {
        include "modul/mod_saran/saran_A.php";
    }
    //MODUL VIEW GURU
    elseif ($_GET['modul'] == 'guru') {
        include "modul/mod_guru/guru.php";
    }
    //MODUL INPUT PENGUMUMAN
    elseif ($_GET['modul'] == 'input_pengumuman') {
        include "modul/mod_pengumuman/pengumuman.php";
    }
    elseif ($_GET['modul'] == 'tambah_pengumuman') {
        include "modul/mod_pengumuman/tambah_pengumuman.php";
    }
    
    // //MODUL PEMBELIAN
    // elseif ($_GET['modul'] == 'pembelian') {
    //     include "modul/mod_pembelian/pembelian.php";
    // } elseif ($_GET['modul'] == 'tambah_pembelian') {
    //     include "modul/mod_pembelian/tambah_pembelian.php";
    // } elseif ($_GET['modul'] == 'laporan_pembelian') {
    //     include "modul/mod_pembelian/laporan_pembelian.php";
    // }

    // //MODUL PENJUALAN
    // elseif ($_GET['modul'] == 'penjualan') {
    //     include "modul/mod_penjualan/penjualan.php";
    // } elseif ($_GET['modul'] == 'tambah_penjualan') {
    //     include "modul/mod_penjualan/tambah_penjualan.php";
    // } elseif ($_GET['modul'] == 'laporan_penjualan') {
    //     include "modul/mod_penjualan/laporan_penjualan.php";
    // }




    // //MODUL PASSWORD
    // elseif ($_GET['modul'] == 'profil') {
    //     include "modul/mod_profil/profil_admin.php";
    // }

    // //MODUL UBAH FOTO
    // elseif ($_GET['modul'] == 'foto') {
    //     include "modul/mod_profil/foto_admin.php";
    // }
}
?>
