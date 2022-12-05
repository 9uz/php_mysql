<?php
include ("koneksi.php");
// url http://localhost/detail_data.php?id_pengguna=2
$id=$_GET['id_pengguna'];
$query= "select * from tbl_pengguna where id_pengguna='$id' limit 1 ";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)) {
    echo "ID Pengguna :".$row['id_pengguna']."<br>";
    echo "Nama Lengkap :".$row['nama_lengkap']."<br>";
    echo "Alamat :".$row['alamat']."<br>";
    echo "Gender :".$row['gender']."<br>";
    echo "Agama :".$row['agama']."<br>";
}
?>