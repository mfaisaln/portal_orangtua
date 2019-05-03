-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 01 Mei 2019 pada 10.07
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `portu`
--
CREATE DATABASE IF NOT EXISTS `portu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `portu`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
  `id_absensi` int(11) NOT NULL AUTO_INCREMENT,
  `jam_masuk` varchar(111) NOT NULL,
  `jam_keluar` varchar(111) NOT NULL,
  `tanggal` date NOT NULL,
  `id_s` int(11) NOT NULL,
  PRIMARY KEY (`id_absensi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `jam_masuk`, `jam_keluar`, `tanggal`, `id_s`) VALUES
(1, '06.30', '12.40', '2019-02-01', 1),
(2, '06.40', '12.12', '2019-02-02', 2),
(3, '07.30', '12.30', '2019-02-01', 7),
(4, '07.30', '12.30', '2019-02-02', 7),
(5, '07.30', '12.30', '2019-02-03', 7),
(6, '07.30', '12.30', '2019-02-04', 7),
(7, '07.30', '12.30', '2019-02-05', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(111) NOT NULL,
  `tlp` int(15) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `tlp`) VALUES
(1, 'Faisal Nur', 918293812),
(2, 'icang nur', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(111) NOT NULL,
  `id_s` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_s`, `id_jadwal`) VALUES
(1, 'kelas 1 A', 1, 1),
(2, 'Kelas 1 B', 7, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `matpel`
--

CREATE TABLE IF NOT EXISTS `matpel` (
  `id_matpel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_matpel` varchar(111) NOT NULL,
  `nilai` int(111) NOT NULL,
  `sems` int(2) NOT NULL,
  `id_s` int(11) NOT NULL,
  PRIMARY KEY (`id_matpel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `matpel`
--

INSERT INTO `matpel` (`id_matpel`, `nama_matpel`, `nilai`, `sems`, `id_s`) VALUES
(1, 'matematika', 70, 1, 1),
(2, 'bahasa Inggris', 80, 1, 1),
(3, 'Biologi', 80, 1, 1),
(4, 'Fisika', 90, 2, 1),
(5, 'Biologi', 60, 1, 2),
(6, 'Matematika', 80, 1, 3),
(7, 'Ipa', 70, 1, 7),
(8, 'Fisika', 90, 1, 7),
(9, 'Biologi', 88, 1, 7),
(10, 'Matematika', 78, 1, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ngadu`
--

CREATE TABLE IF NOT EXISTS `ngadu` (
  `id_ngadu` int(11) NOT NULL AUTO_INCREMENT,
  `ngadu` varchar(100) NOT NULL,
  `id_ortu` int(11) NOT NULL,
  PRIMARY KEY (`id_ngadu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `ngadu`
--

INSERT INTO `ngadu` (`id_ngadu`, `ngadu`, `id_ortu`) VALUES
(1, 'anak saya dibully', 1),
(8, 'PR anak saya terlalu sulit', 5),
(10, 'Pulang dipercepat', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ortu`
--

CREATE TABLE IF NOT EXISTS `ortu` (
  `id_ortu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ortu` varchar(111) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `hak_akses` varchar(10) NOT NULL,
  PRIMARY KEY (`id_ortu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `ortu`
--

INSERT INTO `ortu` (`id_ortu`, `nama_ortu`, `username`, `password`, `hak_akses`) VALUES
(1, 'Ani subaidi', 'ortu', '827ccb0eea8a706c4c34a16891f84e7b', 'ortu'),
(2, 'Nia Diana', 'nia', '827ccb0eea8a706c4c34a16891f84e7b', 'ortu'),
(3, 'Bu juadi', 'coba', '827ccb0eea8a706c4c34a16891f84e7b', 'wali'),
(4, 'admin', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(5, 'doni', 'doni', '827ccb0eea8a706c4c34a16891f84e7b', 'ortu'),
(6, 'dani', 'dani', '827ccb0eea8a706c4c34a16891f84e7b', 'ortu'),
(7, 'Bu nandia', 'nandia', '827ccb0eea8a706c4c34a16891f84e7b', 'wali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE IF NOT EXISTS `pengaduan` (
  `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT,
  `pengaduan` varchar(111) NOT NULL,
  `id_ortu` int(11) NOT NULL,
  PRIMARY KEY (`id_pengaduan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `pengaduan`, `id_ortu`) VALUES
(1, 'Makanan di sekolah kurang bersih', 1),
(6, 'Fasilitas kurang baik', 5),
(9, 'Kelasnya jelek', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `subjek` varchar(100) NOT NULL,
  `desktipsi` text NOT NULL,
  `id_ortu` int(11) NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_p`, `subjek`, `desktipsi`, `id_ortu`) VALUES
(1, 'Libur Sekolah', 'pada tanggal 20 april 2019 akan diadakan akridasi sekolah. maka dari itu sekolah akan diliburkan', 4),
(2, 'Libur semester', 'diumumkan libur sekolah untuk megakhiri semester 2 dimulai dari 20 april 2019 - 15 mei 2019', 4),
(3, 'Kegiatan Closing MT-PAI 2019', 'Dilaksanakan dari tanggal 23 24 Februari 2019, yang diikuti 112 ikhwan dan 155 akhwat jumlah total 267.  MT-PAI merupakan program tahunan selama satu semester di awal tahun pelajaran 2018/2019. Mentoring Terintegrasi (MT-PAI) ini bukanlah kegiatan ekstrakurikuler melainkan kegiatan keagamaan berupa penyampaian materi  kurikulum 2006/KTSP Baca Selengkapnya', 4),
(4, 'EDU PASSION 2019', 'Bapak Gubernur Jawa Barat sekaligus alumni SMA Negeri 3 Bandung memberikan sambutan mengenai kegiatan Edu Passion 2019, beliau sangat mendukung dengan kegiatan ini karena banyak manfaat terutama bagi siswa kelas XII yang sedang bimbang dalam melanjutkan pendidikannya Baca Selengkapnya', 4),
(5, 'Pengisian Buku Induk Siswa', 'Bagi siswa yang telah diterima di jalur reguler 1 dan prestasi, PASTIKAN SUDAH MENGISI DATA INDUK SISWA DENGAN LENGKAP di sini. Kemudian membawa bukti pengisian buku induk yang telah dicetak/print, sebagai syarat melakukan pengukuran seragam.\r\n\r\n \r\n\r\nTerimakasih.\r\n\r\nPanduan Pengisian Buku Induk Siswa', 4),
(8, 'ini judul', 'ini konten', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE IF NOT EXISTS `saran` (
  `id_saran` int(11) NOT NULL AUTO_INCREMENT,
  `saran` varchar(111) NOT NULL,
  `id_ortu` int(11) NOT NULL,
  PRIMARY KEY (`id_saran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id_saran`, `saran`, `id_ortu`) VALUES
(1, 'sarana prasana lebih diperbaikin lagi', 1),
(2, 'guru di tambah lagi', 2),
(3, 'PR dipermudah', 5),
(5, 'Diberi kopi dikelas', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_s` int(11) NOT NULL AUTO_INCREMENT,
  `nama_s` varchar(111) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_ortu` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  PRIMARY KEY (`id_s`),
  KEY `id_kelas` (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_s`, `nama_s`, `id_kelas`, `id_ortu`, `id_guru`) VALUES
(1, 'ani', 1, 1, 1),
(2, 'ana', 1, 1, 7),
(3, 'ono', 2, 1, 7),
(4, 'nono', 2, 2, 1),
(5, 'ene', 2, 2, 7),
(6, 'ini', 2, 2, 1),
(7, 'indah', 1, 5, 1),
(8, 'andi', 1, 6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE IF NOT EXISTS `spp` (
  `id_spp` int(11) NOT NULL AUTO_INCREMENT,
  `tanggungan` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `semester` int(4) NOT NULL,
  `id_s` int(11) NOT NULL,
  PRIMARY KEY (`id_spp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id_spp`, `tanggungan`, `bayar`, `semester`, `id_s`) VALUES
(1, 2000000, 2000000, 1, 1),
(2, 1600000, 1600000, 2, 1),
(3, 2000000, 2000000, 3, 1),
(4, 2000000, 1300000, 4, 1),
(5, 2000000, 0, 1, 2),
(6, 2000000, 200000, 1, 7),
(7, 2000000, 150000, 1, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id_upload` int(23) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `id_ortu` int(11) NOT NULL,
  PRIMARY KEY (`id_upload`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `upload`
--

INSERT INTO `upload` (`id_upload`, `nama`, `id_ortu`) VALUES
(9, 'izin.pdf', 1),
(11, 'izin2.pdf', 5),
(12, 'doc_2.pdf', 0),
(13, 'izin2.pdf', 5),
(14, 'izin2.pdf', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
