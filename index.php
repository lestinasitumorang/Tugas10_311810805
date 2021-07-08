<?php
// panggil koneksinya
require_once 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD Tugas 10</title>
</head>
<body>
  <h1>CRUD Tugas 10 (Lestina Situmorang_311810805)</h1>
  <!-- 
  Create atau menambahkan data baru 
  Data akan dikirimkan ke add.php untuk diproses
  -->
  <form method="post" action="add.php">
    <input type="text" name="nama_barang" placeholder="Nama produk">
   <input type="number" name="harga_barang" placeholder="Harga produk">


    <input type="submit" name="submit" value="Tambah Data">
  </form><br/>
  <!-- Read atau menampilkan data dari database -->
  <table border="1">
    <tr>
      <th>No.</th> 
      <th>ID Barang</th>
      <th>Nama Barang</th>
      <th>Harga Barang</th>

      <th colspan="2">Aksi</th>
    </tr>
    <?php
    // Tampilkan semua data
    $q = $conn->query("SELECT * FROM tb_barang");

    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>
    <tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['id_barang'] ?></td>
      <td><?= $dt['nama_barang'] ?></td>
      <td><?= $dt['harga_barang'] ?></td>


      <td><a href="update.php?id=<?= $dt['id_barang'] ?>">Ubah</a></td>
      <td><a href="delete.php?id=<?= $dt['id_barang'] ?>" 
	  onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>
    <?php
    endwhile;
    ?> 
  </table>
</body>
</html>