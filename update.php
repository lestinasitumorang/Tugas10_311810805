<?php
require_once 'koneksi.php';
// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // ambil data berdasarkan id_produk
  $q = $conn->query("SELECT * FROM tb_barang WHERE id_barang = '$id'");
  foreach ($q as $dt) :
  ?>
  <h1>CRUD Tugas 10 (septian_saputra_311810265)</h1>
  <h2>Halaman Ubah Data</h2>

  <form action="proses_update.php" method="post">
    <input type="hidden" name="id_barang" value="<?= $dt['id_barang'] ?>">
    <input type="text" name="nama_barang" value="<?= $dt['nama_barang'] ?>">
    <input type="number" name="harga_barang" value="<?= $dt['harga_barang'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>

  <?php
  endforeach;
}