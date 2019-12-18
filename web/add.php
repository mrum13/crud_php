<html>
<head>
    <title>Menambahkan Data</title>
</head>

<body>
    <a href="index.php">Kembali ke Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
    <H1>Tambah Data Kategori</H1>
        <table width="25%" border="0">
            <tr> 
                <td>ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr> 
                <td>Nama Kategori</td>
                <td><input type="text" name="nama_kategori"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit_kategori" value="Add"></td>
            </tr>
        </table>
    </form>

    <br/><br/>

    <form action="queryAdd.php" method="post" >
    <H1>Tambah Data Product</H1>
        <table width="25%" border="0">
            <tr> 
                <td>Kode Produk</td>
                <td><input type="text" name="kode_produk"></td>
            </tr>
            <tr> 
                <td>Nama produk</td>
                <td><input type="text" name="nama_produk"></td>
            </tr>
            <tr> 
                <td>Kategori</td>
                <td>
		        <select name="kategori">
			        <?php
                        include_once("config.php");
                        $hasil = mysqli_query($sql, "SELECT * FROM kategori");
                        while ($qtabel = mysqli_fetch_assoc($hasil))
                        {
                            echo '<option value="'.$qtabel['id'].'">'.$qtabel['id'].'</option>';				
                        }
                    ?>
                </select>
		        </td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit_product" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php    

    // Menambahkan data kategori.
    if(isset($_POST['Submit_kategori'])) {
        $id_kategori = $_POST['id'];
        $nama_kategori = $_POST['nama_kategori'];

        // include database connection file
        include_once("config.php");

        // Insert data ke table kategori
        $result_kategori = mysqli_query($sql, "INSERT INTO kategori VALUES('$id_kategori','$nama_kategori')");

        // Show message when user added
        echo "Kategori Berhasil ditambahkan. <a href='index.php'>View Users</a>"; 
    }

    ?>
</body>
</html>