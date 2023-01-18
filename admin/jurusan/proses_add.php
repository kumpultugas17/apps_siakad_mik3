<?php
if (isset($_POST['simpan'])) {
   require_once '../../config.php';
   $kode_jurusan = $_POST['kode_jurusan']; //didapat dari name form input
   $nama_jurusan = $_POST['nama_jurusan']; //didapat dari name form input
   $status = $_POST['status']; //didapat dari name form input

   $sql = $conn->query("INSERT INTO jurusan (kode_jurusan, nama_jurusan, status) VALUES ('$kode_jurusan', '$nama_jurusan', '$status')");

   if ($sql) {
      header('location:index.php');
   } else {
      echo 'Gagal';
   }
}
