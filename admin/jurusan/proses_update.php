<?php 
if (isset($_POST)) {
   require_once '../../config.php';
   $id = $_POST['id'];
   $kode_jurusan = $_POST['kode_jurusan'];
   $nama_jurusan = $_POST['nama_jurusan'];
   $status = $_POST['status'];

   $sql = $conn->query("UPDATE jurusan SET kode_jurusan = '$kode_jurusan', nama_jurusan = '$nama_jurusan', status = '$status' WHERE id_jur = '$id'");

   if ($sql) {
      header('location:index.php');
   } else {
      echo 'Gagal update!';
   }
}