<?php
   if (isset($_GET['id'])) {
      require_once '../../config.php';
      $id = $_GET['id'];

      $query = $conn->query("SELECT * FROM jurusan WHERE id_jur = '$id'");
      $result = mysqli_fetch_assoc($query);
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <title>Document</title>
</head>

<body>
   <form action="proses_update.php" method="post">
      <input type="hidden" name="id" value="<?= $result['id_jur'] ?>">
      <input type="text" name="kode_jurusan" value="<?= $result['kode_jurusan'] ?>">
      <input type="text" name="nama_jurusan" value="<?= $result['nama_jurusan'] ?>">
      <select name="status">
         <option selected disabled>Pilih Jurusan</option>
         <option value="1" <?= $result['status'] == '1' ? 'selected' : '' ?>>Aktif</option>
         <option value="0" <?= $result['status'] == '0' ? 'selected' : '' ?>>Tidak Aktif</option>
      </select>
      <button type="submit" name="simpan">Simpan</button>
   </form>
</body>

</html>