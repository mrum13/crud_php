<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['kode_produk'];

// Delete user row from table based on given id
$result = mysqli_query($sql, "DELETE FROM product WHERE kode_produk=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>

<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($sql, "DELETE FROM kategori WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>