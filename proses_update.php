<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id_barang'];
  $nama_barang = $_POST['nama_barang'];
  $harga_barang = $_POST['harga_barang'];
  
  // update data berdasarkan id_barang yg dikirimkan
  $q = $conn->query("UPDATE tb_barang SET nama_barang = '$nama_barang', harga_barang = '$harga_barang' WHERE id_barang = '$id'");

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data barang berhasil diubah'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data barang gagal diubah'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}