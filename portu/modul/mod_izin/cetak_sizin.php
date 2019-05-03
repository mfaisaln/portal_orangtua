<?php
session_start();

include "../../fungsi/koneksi.php";
include "../../fungsi/fungsi_tanggal.php";
include"../../fungsi/pdf/fpdf.php";





$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L');

$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 5, 'SURAT IZIN SISWA', 0, 1, 'C');
$pdf->SetFont('Arial', 'I', 12);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->write(12,'Dengan hormat, ');
$pdf->write(12,'Dengan ini saya selaku orang tua/wali murid dari :');
$pdf->Ln();
$pdf->write(12,'Nama :  Faisal Nur');$pdf->Ln();
$pdf->write(12,'Kelas :  1 B');$pdf->Ln();
$pdf->write(12,'Alamat :  bandung');
$pdf->Ln();
$pdf->SetFont('Arial', 'I', 12);
$pdf->write(12,'Memberitahukan bahwa anak saya tersebut diatas tidak dapat mengikuti pelajaran seperti biasa pada hari ini, Kamis 12 April 2018 dikarenakan sakit. Oleh karena itu, kami memohon pada Bapak/Ibu Guru Wali Kelas 1B agar memberikan izin.');

$pdf->Ln();
$pdf->write(12,'Demikia yang dapat kami sampaikan. Atas perhatian Bapak/Ibu kami ucapkan terimakasih. ');
//Data


//footer selalu sama
$pdf->SetFont('Arial', '', 9);
$pdf->Ln();
        $pdf->setX(120);
$pdf->Cell(163 / 2, 6, ',', 0, 0, 'C');
$pdf->Cell(5, 6, 'Bandung, ' . format_date(date('Y-m-d')), 0, 1, 'C', 0);
$pdf->Ln(-2);
        $pdf->setX(80);
$pdf->Cell(163 / 2, 6, ',', 0, 0, 'C');
$pdf->Cell(163 / 2, 6, 'Hormat Kami,', 0, 0, 'C');

$pdf->SetFont('Arial', 'U', 9);
$pdf->Ln(20);
        $pdf->setX(80);
$pdf->Cell(163 / 2, 6, '', 0, 0, 'C', 0);
$pdf->Cell(163 / 2, 6, $_SESSION['nama'], 0, 1, 'C', 0);

$pdf->Ln(-2);
$pdf->SetFont('Arial', '', 9);
        $pdf->setX(80);
$pdf->Cell(163 / 2, 6,'' , 0, 0, 'C', 0);
$pdf->Cell(163 / 2, 6, 'Orang Tua', 0, 0, 'C', 0);
$pdf->Output();
// header('location:../../index.php?modul=home');
?>