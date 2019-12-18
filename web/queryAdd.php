<?php
//Menambahkan data produk
if(isset($_POST['Submit_product'])) {
    $kode_produk = $_POST['kode_produk'];
    $nama_produk = $_POST['nama_produk'];
    $kategori = $_POST['kategori'];
  $harga = $_POST['harga'];

   

  // include database connection file
  include_once("config.php");

  // Insert data ke table produk
  $result_produk = mysqli_query($sql,"INSERT INTO product 
  (kode_produk,nama_produk,kategori,harga)
  VALUES ('$kode_produk', '$nama_produk', '$kategori','$harga')");

  // Show message when user added
    if(!$result_produk){
        echo "gagal menginput";
    }else{

   echo "Produk berhasil ditambahkan. <a href='index.php'>Lihat Data</a>"; 
    }
}
?>