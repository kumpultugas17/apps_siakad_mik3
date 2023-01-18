<?php
if (isset($_GET['id'])) {
   require_once '../../config.php';
   $id = $_GET['id'];

   $sql = $conn->query("DELETE FROM jurusan WHERE id_jur = '$id'");

   if ($sql) {
      header('location:index.php');
   }
}
