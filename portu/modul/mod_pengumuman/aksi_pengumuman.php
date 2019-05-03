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
    if ($module == 'pengumuman' AND $act == 'tambah') {
        //FUNGSI MENGHILANGKAN BANYAK SPASI DIAMBIL DARI fungsi/fungsi_validasi.php =>function trimed
        $subjek = trimed($_POST['subjek']);
        $desktipsi = trimed($_POST['desktipsi']);
        $id = trimed($_SESSION['id_or']);

        $cek = mysql_query("SELECT * FROM pengumuman WHERE desktipsi = '$desktipsi'");
        if (mysql_num_rows($cek) > 0) {
            echo"<script language='javascript'>
                        alert('Merk yang anda masukkan sudah ada. Periksa kembali data Merk yang sudah ada !');
                        self.history.back();
                </script>";
        } else {
                $query = mysql_query("INSERT INTO pengumuman (
                                    subjek,desktipsi,id_ortu)
                            VALUES(
                                    '$_POST[subjek]','$_POST[desktipsi]','$id')") or die(mysql_error());
                if ($query) {
                    header('location:../../index.php?modul=' . 'input_pengumuman' . '&pesan=tambah');
                } else {
                    header('location:../../index.php?modul=' . 'input_pengumuman' . '&pesan=error');
                }
            }
        }
    //MODUL UBAH MERK
    elseif ($module == 'merk' AND $act == 'ubah') {
		$nama_merk = trimed($_POST['nama_merk']);
        mysql_query("UPDATE merk SET nama_merk     = '$nama_merk'
                                WHERE id_merk      = '$_POST[id_merk]'");
        header('location:../../index.php?modul=' . $module . '&pesan=ubah');
    } elseif ($module == 'pengumuman' AND $act == 'hapus') {
            //HAPUS DATA MERK
            $query = mysql_query("DELETE FROM pengumuman WHERE id_p='$_GET[id]'");
            if ($query) {

                header('location:../../index.php?modul=' . 'input_pengumuman' . '&pesan=hapus');
            } else {
                echo"<script language='javascript'>
                        alert('Data tidak dapat dihapus, karena masih dipergunakan!');
                        window.location='../../index.php?modul='input_pengumuman'';
                </script>";
            }
    }
}
?>
