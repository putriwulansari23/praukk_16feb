<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN UKK</title>

</head>
<body>
        <h3>DATA BAHAN LAB</h3>
        <h4><a href="tambah.php">tambah bahan</a></h4>
        <table border="1">
            <tr>
                <td>No</td>
                <td>Nama User</td>
                <td>Jabatan</td>
                <td>Nama Bahan</td>
                <td>Jenis Bahan</td>
                <td>Stok</td>   
                <td>Harga</td>
                <td>Kondisi</td>
                <td>Tanggal Masuk</td>
                <td>Aksi</td>
</tr>

<?php
include("koneksi.php");
$query=mysqli_query($koneksi,"SELECT * FROM tb_user INNER JOIN tb_bahan ON tb_user.id_bahan = tb_bahan.id_bahan");
while($row=mysqli_fetch_array($query)){
echo"<tr>";
    echo"<td>".$row['id_user']."</td>";
    echo"<td>".$row['nama_user']."</td>";
    echo"<td>".$row['jabatan']."</td.>";
    echo"<td>".$row['nama_bahan']."</td>";
    echo"<td>".$row['jenis_bahan']."</td>";
    echo"<td>".$row['stok']."</td>";
    echo"<td>".$row['harga']."</td>";
    echo"<td>".$row['kondisi']."</td>";
    echo"<td>".$row['tanggal_masuk']."</td>";
    echo"<td>";
    echo"<a href='edit.php?id_user=".$row['id_user']."'>Edit</a>|";
    echo"<a href='hapus.php?id_user=".$row['id_user']."'>Hapus</a>|";
    echo"</td>";
    echo"</tr>";
}
?>
</table>
</center>
</body>
</html>