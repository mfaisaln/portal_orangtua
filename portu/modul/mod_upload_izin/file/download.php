<?php
// Source Code Download File dengan PHP
include "../../fungsi/koneksi.php";
if(isset($_GET['id_upload'])){
 $id = $_GET['id_upload'];
 $stat= $db->prepare("select * from upload")
 
 if (file_exists($file))
 {
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename='.basename($file));
  header('Content-Transfer-Encoding: binary');
  header('Expires: 0');
  header('Cache-Control: private');
  header('Pragma: private');
  header('Content-Length: ' . filesize($file));
  ob_clean();
  flush();
  readfile($file);
  exit;
 } 
 else 
 {
  echo "file {$_GET['nama_file']} sudah tidak ada.";
 }
}
?>

