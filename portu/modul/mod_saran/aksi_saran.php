<?php

session_start();
if (empty($_SESSION['id_pengguna']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
    $module = $_GET['modul'];
    $act = $_GET['act'];

    include "../../fungsi/excel_reader2.php";
    include "../../fungsi/koneksi.php";
    include"../../fungsi/fungsi_tanggal.php";
    include"../../fungsi/fungsi_validasi.php";

    //MODUL TAMBAH GURU
    if ($module == 'saran' AND $act == 'tambah') {
        //FUNGSI MENGHILANGKAN BANYAK SPASI DIAMBIL DARI fungsi/fungsi_validasi.php =>function trimed
        $saran = trimed($_POST['saran']);
        $id = trimed($_SESSION['id_or']);

        $cek = mysql_query("SELECT saran FROM saran WHERE saran = '$saran'");
        if (mysql_num_rows($cek) > 0) {
            echo"<script language='javascript'>
                        alert('Merk yang anda masukkan sudah ada. Periksa kembali data Merk yang sudah ada !');
                        self.history.back();
                </script>";
        } else {
                $query = mysql_query("INSERT INTO saran(
                                    saran,id_ortu)
                            VALUES(
                                    '$_POST[saran]','$id')") or die(mysql_error());
                if ($query) {
                    header('location:../../index.php?modul=' . $module . '&pesan=tambah');
                } else {
                    header('location:../../index.php?modul=' . $module . '&pesan=error');
                }
            }
        }
    //MODUL UBAH MERK
    elseif ($module == 'merk' AND $act == 'ubah') {
		$nama_merk = trimed($_POST['nama_merk']);
        mysql_query("UPDATE merk SET nama_merk     = '$nama_merk'
                                WHERE id_merk      = '$_POST[id_merk]'");
        header('location:../../index.php?modul=' . $module . '&pesan=ubah');
    } elseif ($module == 'saran' AND $act == 'hapus') {
            //HAPUS DATA MERK
            $query = mysql_query("DELETE FROM saran WHERE id_saran='$_GET[id]'");
            if ($query) {

                header('location:../../index.php?modul=' . $module . '&pesan=hapus');
            } else {
                echo"<script language='javascript'>
                        alert('Data tidak dapat dihapus, karena masih dipergunakan!');
                        window.location='../../index.php?modul=$module';
                </script>";
            }
    }
}
?>
