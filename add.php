<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  // $id_barang = $_POST['id_barang'];
  $nama_barang = $_POST['nama_barang'];
  $harga_barang = $_POST['harga_barang'];
 

  // id_barang bernilai '' karena kita set auto increment;
  $query = "INSERT INTO tb_barang (nama_barang,harga_barang) VALUES ( '$nama_barang', '$harga_barang')";
  $q = $conn->query($query);
  
  if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data produk berhasil ditambahkan'); 
    window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data produk gagal ditambahkan');
    window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}