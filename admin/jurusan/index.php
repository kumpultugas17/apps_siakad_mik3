<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="act_create.php" method="post">
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
         <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
      </tbody>
   </table>
</body>

</html>