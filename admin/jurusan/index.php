<!DOCTYPE html>
<html lang="en">

<head>
   <title>Document</title>
</head>

<body>
   <form action="proses_add.php" method="post">
      <input type="text" name="kode_jurusan" placeholder="Masukkan kode jurusan">
      <input type="text" name="nama_jurusan" placeholder="Masukkan nama  jurusan">
      <select name="status">
         <option selected disabled>Pilih Jurusan</option>
         <option value="1">Aktif</option>
         <option value="0">Tidak Aktif</option>
      </select>
      <button type="submit" name="simpan">Simpan</button>
   </form>

   <table>
      <thead>
         <tr>
            <th>No</th>
            <th>Kode Jurusan</th>
            <th>Nama Jurusan</th>
            <th>Status</th>
            <th>Aksi</th>
         </tr>
      </thead>
      <tbody>
         <?php
         require_once '../../config.php';
         $no = 1;
         $query = $conn->query("SELECT * FROM jurusan");
         foreach ($query as $data) :
         ?>
            <tr>
               <td><?= $no++ ?></td>
               <td><?= $data['kode_jurusan'] ?></td>
               <td><?= $data['nama_jurusan'] ?></td>
               <td><?= $data['status'] ?></td>
               <td>
                  <a href="edit.php?id=<?= $data['id_jur'] ?>">Edit</a>
                  <a href="proses_delete.php?id=<?= $data['id_jur'] ?>">Hapus</a>
               </td>
            </tr>
         <?php
         endforeach
         ?>
      </tbody>
   </table>
</body>

</html>