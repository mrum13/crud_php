<?php
//menghubungkan ke file config.php untuk koneksi database
include_once("config.php");

// query untuk melihat (select)
$result_kategori = mysqli_query($sql, "SELECT * FROM kategori");
?>

<?php
//menghubungkan ke file config.php untuk koneksi database
include_once("config.php");

// query untuk melihat (select)
$result_product = mysqli_query($sql, "SELECT * FROM product");
?>

<html>
<head>    
    <title>Tugas Pendahuluan 8</title>
</head>

<body>
<a href="add.php">Tambahkan data baru</a><br/><br/>

    <h1>Data Kategori</h1>
    <table width='80%' border=1>
    <tr>
        <th>ID Kategori</th> <th>Nama_Kategori</th>
    </tr>
    <?php  
    while($user_data_kategori = mysqli_fetch_array($result_kategori)) {         
        echo "<tr>";
        echo "<td>".$user_data_kategori['id']."</td>";
        echo "<td>".$user_data_kategori['nama_kategori']."</td>";    
        echo "<td><a href='delete.php?id=$user_data_kategori[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>

    <h1>Data Produk</h1>
    <table width='80%' border=1>
    <tr>
        <th>kode_produk</th> <th>nama_produk</th> <th>kategori</th> <th>harga</th>
    </tr>
    <?php  
    while($user_data_produk = mysqli_fetch_array($result_product)) {         
        echo "<tr>";
        echo "<td>".$user_data_produk['kode_produk']."</td>";
        echo "<td>".$user_data_produk['nama_produk']."</td>";
        echo "<td>".$user_data_produk['kategori']."</td>";
        echo "<td>".$user_data_produk['harga']."</td>";    
        echo "<td><a href='delete.php?kode_produk=$user_data_produk[kode_produk]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>